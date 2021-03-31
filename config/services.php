<?php

use Symfony\Component\HttpFoundation\Request;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

return [
    Environment::class => function() {
        $loader = new FilesystemLoader(__DIR__ . '/../templates');
        
        return new Environment($loader, [
            'cache' => __DIR__ . '/../var/cache',
            'auto_reload' => true
        ]);
    },

    Request::class => function() {
        return Request::createFromGlobals();
    }
];