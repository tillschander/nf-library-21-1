<?php

use App\Controller\CartController;
use App\Controller\CategoryController;
use App\Controller\HomeController;
use App\Controller\ItemController;

return [
    ['GET', '/', [HomeController::class, 'show']],
    ['GET', '/category/{id}', [CategoryController::class, 'show']],
    ['GET', '/item/{id}', [ItemController::class, 'show']],
    ['GET', '/cart', [CartController::class, 'show']],
    ['POST', '/cart/{id}', [CartController::class, 'add']],
    ['GET', '/cart/success', [CartController::class, 'success']],
    ['POST', '/borrow', [CartController::class, 'borrow']]
];
