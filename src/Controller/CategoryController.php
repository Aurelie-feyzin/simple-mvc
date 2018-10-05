<?php

namespace Controller;

use Model\CategoryManager;
use Twig_Environment;
use Twig_Loader_Filesystem;


class CategoryController
{
    private $twig;

    public function __construct()
    {
        $loader = new Twig_Loader_Filesystem( __DIR__ . '/../View');
        $this->twig = new Twig_Environment($loader);
    }

    public function index()
    {
        $categoryManager = new CategoryManager();
        $categories = $categoryManager->selectAllCategories();

        return $this->twig->render('Category/index.html.twig', [
            'categories' => $categories,
        ]);
    }

    public function show($id)
    {
        $categoryManager = new CategoryManager();
        $category = $categoryManager->selectOneCategory($id);

        return $this->twig->render('Category/show.html.twig', [
            'category' => $category,
        ]);
    }

}