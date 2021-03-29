<?php

return [
    ['GET', '/', function () {
        return file_get_contents(__DIR__ . '/../templates/index.html');
    }],
    ['GET', '/category/{id}', function () {
        return file_get_contents(__DIR__ . '/../templates/category.html');
    }],
    ['GET', '/item', function () {
        return file_get_contents(__DIR__ . '/../templates/item.html');
    }],
    ['GET', '/cart', function () {
        return file_get_contents(__DIR__ . '/../templates/cart.html');
    }],
    ['POST', '/cart', function () {
        return '';
    }],
    ['GET', '/cart/success', function () {
        return file_get_contents(__DIR__ . '/../templates/success.html');
    }],
    ['POST', '/borrow', function () {
        return '';
    }]
];
