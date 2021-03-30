<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    public static function show(): Response
    {
        return static::render('index');
    }
}