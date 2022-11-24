<?php

namespace App\Controller\Back;

use App\Queries\CategoryQueries;

class CategoryController extends BackController
{
    private CategoryQueries $categoryService;

    public function __construct()
    {
        $this->categoryService = new CategoryQueries();
    }

    public function index()
    {
        $this->login();

        $categories = $this->categoryService->getCategories();


        echo $this->Twig()->render('category.twig', [
            'error' => $error,
            'categories' => $categories
        ]);
    }
}