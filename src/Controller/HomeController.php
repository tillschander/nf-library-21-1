<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    public function show(): Response
    {
        return $this->render('index');
    }
}