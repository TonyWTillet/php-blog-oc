<?php

namespace App\Controller\Back;

use App\Commands\Delete\CategoryDeleteCommands;
use App\Controller\RequireAuhtentification;
use App\Queries\CategoryQueries;

class CategoryController extends BackController implements RequireAuhtentification
{
    private CategoryQueries $categoryService;
    private CategoryDeleteCommands $categoryCommands;

    public function __construct()
    {
        $this->categoryService = new CategoryQueries();
        $this->categoryCommands = new CategoryDeleteCommands();
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
        $this->categoryCommands->deleteCategory($_GET['id']);
    }
}