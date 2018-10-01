<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../app/dispatcher.php';

/* A Simple router
list url :
http://localhost:8000/index.php?route=items
http://localhost:8000/index.php?route=item&id=$id


$route = $_GET['route'] ?? '';

if ($route === 'items') {
    $itemController = new Controller\ItemController();
    $items = $itemController->index();
} elseif ($route == 'item') {
    $itemController = new Controller\ItemController();
    $item = $itemController->show($_GET['id']);
}else {
    header("HTTP/1.0 404 Not Found");
    echo 'Page introuvable';
}

*/

