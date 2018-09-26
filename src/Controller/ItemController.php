<?php

namespace Controller;

use Model\ItemManager;

class ItemController
{
    public function index()
    {
        $itemManager = new ItemManager();
        $items =  $itemManager->selecAllItems();
        require __DIR__ . '/../View/index.php';

        return $items;
    }
}
