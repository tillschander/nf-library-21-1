<?php

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];
$routes = require __DIR__ . '/../config/routes.php';
$response = '';

foreach ($routes as $route) {
    if ($method === $route[0] && $uri === $route[1]) {
        $response = call_user_func($route[2]);
    }
}

echo $response;
