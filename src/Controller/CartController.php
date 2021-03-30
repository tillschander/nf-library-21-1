<?php

namespace App\Controller;

class CartController
{
    public static function show()
    {
        return file_get_contents(__DIR__ . '/../../templates/cart.html');
    }

    public static function add()
    {
        return '';
    }

    public static function success()
    {
        return file_get_contents(__DIR__ . '/../../templates/success.html');
    }

    public static function borrow()
    {
        return '';
    }
}
