<?php

namespace App\Controller\Back;

use App\Queries\CategoryQueries;

class DashboardController extends BackController
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


        require $this->Twig()->display('dashboard.twig', [
            'error' => $error
        ]);
    }
}