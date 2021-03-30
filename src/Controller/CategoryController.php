<?php

namespace App\Controller;

class CategoryController extends AbstractController
{
    public static function show()
    {
        return static::render('category');
    }
}