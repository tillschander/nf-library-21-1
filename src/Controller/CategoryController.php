<?php

namespace App\Controller;

class CategoryController
{
    public static function show()
    {
        return file_get_contents(__DIR__ . '/../../templates/category.html');
    }
}