<?php

namespace Controller;

use Model\CategoryManager;


class CategoryController
{
    public function index()
    {
        $categoryManager = new CategoryManager();
        $categories = $categoryManager->selectAllCategories();
        require __DIR__ . '/../View/Category/index.php';

        return $categories;
    }

    public function show($id)
    {
        $categoryManager = new CategoryManager();
        $category = $categoryManager->selectOneCategory($id);
        require __DIR__ . '/../View/Category/show.php';

        return $category;
    }

}