<?php

namespace App\Controller;

class CategoryController extends AbstractController
{
    public static function show()
    {
        return file_get_contents(__DIR__ . '/../../templates/category.html');
    }
}