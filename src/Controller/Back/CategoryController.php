<?php

namespace App\Controller\Back;

use App\Controller\RequireAuhtentification;
use App\Queries\CategoryQueries;

class CategoryController extends BackController implements RequireAuhtentification
{
    private CategoryQueries $categoryService;

    public function __construct()
    {
        $this->categoryService = new CategoryQueries();
    }

    public function index()
    {

        $categories = $this->categoryService->getCategories();

        require $this->Twig('category', $categories, 'categories');
    }
}