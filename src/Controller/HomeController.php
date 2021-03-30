<?php

namespace App\Controller;

class HomeController extends AbstractController
{
    public static function show()
    {
        return file_get_contents(__DIR__ . '/../../templates/index.html');
    }
}