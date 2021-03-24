<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

require_once __DIR__ . '/../vendor/autoload.php';

error_reporting(E_ALL);

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$request = Request::createFromGlobals();
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

$response->send();
