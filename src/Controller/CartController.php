<?php

namespace App\Controller;

class CartController extends AbstractController
{
    public function show()
    {
        return $this->render('cart/show.html.twig', []);
    }

    public function add()
    {
        return '';
    }

    public function success()
    {
        return $this->render('cart/success.html.twig', []);
    }

    public function borrow()
    {
        return '';
    }
}
