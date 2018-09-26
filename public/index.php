<?php

use Controller\ItemController;

require __DIR__ . '/../vendor/autoload.php';

$itemController = new ItemController();
$items = $itemController->index();
