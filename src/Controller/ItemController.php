<?php

namespace App\Controller;

class ItemController extends AbstractController
{
    public static function show()
    {
        return file_get_contents(__DIR__ . '/../../templates/item.html');
    }
}