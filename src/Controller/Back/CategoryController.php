<?php

namespace App\Controller\Back;

use App\Commands\CategoryCommands;
use App\Controller\RequireAuhtentification;
use App\Queries\CategoryQueries;

class CategoryController extends BackController implements RequireAuhtentification
{
    private CategoryQueries $categoryService;
    private CategoryCommands $categoryCommands;

    public function __construct()
    {
        $this->categoryService = new CategoryQueries();
    }

    public function index()
    {
        $categories = $this->categoryService->getCategories();
        require $this->Twig('category', $categories, 'categories');
    }

    public function edit() {

        $category= $this->categoryService->getCategoryById($_GET['id']);
        require $this->Twig('edit-category', $category, 'category');
    }

    public function add() {
        require $this->Twig('add-category', $error, 'error');
    }

    public function delete() {
        $category= $this->categoryCommands->delete($_GET['id']);
        require $this->Twig('add-category', $error, 'error');
    }
}