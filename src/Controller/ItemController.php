<?php

namespace Controller;

use Model\ItemManager;
use Twig_Loader_Filesystem;
use Twig_Environment;


class ItemController
{
    private $twig;

    public function __construct()
    {
        $loader = new Twig_Loader_Filesystem( __DIR__ . '/../View');
        $this->twig = new Twig_Environment($loader);
    }

    public function index()
    {
        $itemManager = new ItemManager();
        $items =  $itemManager->selectAllItems();

        echo $this->twig->render('Item/index.html.twig', [
            'items' => $items,
        ]);
    }

    public function show(int $id)
    {
        $itemManager = new ItemManager();
        $item =  $itemManager->selectOneItem($id);
        echo $this->twig->render('Item/show.html.twig', [
            'item' => $item,
            ]);
    }
}
