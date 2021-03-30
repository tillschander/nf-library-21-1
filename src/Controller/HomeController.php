<?php

namespace App\Controller;

class HomeController
{
    public static function show()
    {
        return file_get_contents(__DIR__ . '/../../templates/index.html');
    }
}