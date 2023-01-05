<?php

namespace App\Controller\Back;

use App\Commands\Delete\CategoryDeleteCommands;
use App\Commands\Edit\CategoryEditCommands;
use App\Controller\RequireAuhtentification;
use App\Queries\CategoryQueries;

class CategoryController extends BackController implements RequireAuhtentification
{
    private CategoryQueries $categoryService;
    private CategoryDeleteCommands $categoryCommands;
    private CategoryEditCommands $categoryEditCommands;

    public function __construct()
    {
        $this->categoryService = new CategoryQueries();
        $this->categoryCommands = new CategoryDeleteCommands();
        $this->categoryEditCommands = new CategoryEditCommands();
    }

    public function index()
    {
        $categories = $this->categoryService->getCategories();
        require $this->Twig('category', $categories, 'categories');
    }

    public function edit() {
        $category= $this->categoryService->getCategoryById($_GET['id']);
        $this->categoryEditCommands->save($_POST['category_title'], $_GET['id']);
        require $this->Twig('edit-category', $category, 'category');
    }

    public function add() {
        require $this->Twig('add-category', $error, 'error');
    }

    public function delete() {
        $this->categoryCommands->deleteCategory($_GET['id']);
    }
}