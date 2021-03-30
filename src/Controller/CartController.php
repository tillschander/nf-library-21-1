<?php

namespace App\Controller;

class CartController extends AbstractController
{
    public static function show()
    {
        return static::render('cart');
    }

    public static function add()
    {
        return '';
    }

    public static function success()
    {
        return static::render('success');
    }

    public static function borrow()
    {
        return '';
    }
}
