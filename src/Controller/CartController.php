<?php

namespace App\Controller;

class CartController extends AbstractController
{
    public function show()
    {
        return $this->render('cart');
    }

    public function add()
    {
        return '';
    }

    public function success()
    {
        return $this->render('success');
    }

    public function borrow()
    {
        return '';
    }
}
