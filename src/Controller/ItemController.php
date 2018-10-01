<?php

namespace Controller;

use Model\ItemManager;

class ItemController
{
    public function index()
    {
        $itemManager = new ItemManager();
        $items =  $itemManager->selectAllItems();
        require __DIR__ . '/../View/Item/index.php';

        return $items;
    }

    public function show(int $id) : array
    {
        $itemManager = new ItemManager();
        $item =  $itemManager->selectOneItem($id);
        require __DIR__ . '/../View/Item/show.php';

        return $item;
    }
}
