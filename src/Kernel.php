<?php

namespace App;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Kernel
{
    public function __construct(string $environment)
    {
        $this->initErrorHandler($environment);
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

    public function handle(Request $request): Response
    {
        $response = new Response();
        $routes = require __DIR__ . '/../config/routes.php';
        
        foreach ($routes as $route) {
            if ($request->getMethod() === $route[0] && $request->getRequestUri() === $route[1]) {
                $content = call_user_func($route[2]);
                $response->setContent($content);
            }
        }
        
        if (!$response->getContent()) {
            $response = new Response('404 - Not Found', 404);
        }

        return $response;
    }
}