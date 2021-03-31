<?php

namespace App;

use DI\Container;
use DI\ContainerBuilder;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FastRoute;

class Kernel
{
    private FastRoute\Dispatcher $dispatcher;
    private Container $container;

    public function __construct(string $environment)
    {
        $this->initErrorHandler($environment);
        $this->initDispatcher();
        $this->initContainer();
    }

    private function initErrorhandler(string $environment): void
    {
        $whoops = new \Whoops\Run;

        if ($environment === 'development') {
            error_reporting(E_ALL);
            $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
        } else {
            error_reporting(E_ERROR);
            $whoops->pushHandler(function() {
                $response = new Response('Internal server error', 500);
                $response->send();
            });
        }

        $whoops->register();
    }

    private function initDispatcher()
    {
        $this->dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
            $routes = require __DIR__ . '/../config/routes.php';

            foreach ($routes as $route) {
                $r->addRoute($route[0], $route[1], $route[2]);
            }
        });
    }

    private function initContainer()
    {
        $builder = new ContainerBuilder();
        $builder->addDefinitions(__DIR__ . '/../config/services.php');
        $this->container = $builder->build();
    }

    public function handle(Request $request): Response
    {
        $routeInfo = $this->dispatcher->dispatch($request->getMethod(), $request->getRequestUri());

        if ($routeInfo[0] === FastRoute\Dispatcher::FOUND) {
            return $this->container->call($routeInfo[1], $routeInfo[2]);
        }
        
        return new Response('404 - Not Found', 404);
    }
}