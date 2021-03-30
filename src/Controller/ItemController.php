<?php

namespace App\Controller;

class ItemController
{
    public static function show()
    {
        return file_get_contents(__DIR__ . '/../../templates/item.html');
    }
}