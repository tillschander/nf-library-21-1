<?php

namespace App\Controller;

class ItemController extends AbstractController
{
    public static function show()
    {
        return static::render('item');
    }
}