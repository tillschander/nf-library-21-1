<?php

namespace App\Controller;

class CategoryController extends AbstractController
{
    public function show()
    {
        return $this->render('category/show.html.twig', []);
    }
}