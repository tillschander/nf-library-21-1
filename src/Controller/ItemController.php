<?php

namespace App\Controller;

class ItemController extends AbstractController
{
    public function show()
    {
        return $this->render('item/show.html.twig', []);
    }
}