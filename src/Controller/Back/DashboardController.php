<?php

namespace App\Controller\Back;

use App\Controller\RequireAuhtentification;
use App\Queries\CategoryQueries;

class DashboardController extends BackController implements RequireAuhtentification
{
    private CategoryQueries $categoryService;

    public function __construct()
    {
        $this->categoryService = new CategoryQueries();
    }

    public function index()
    {

        $categories = $this->categoryService->getCategories();
        $data['categories'] = $categories;
        $data['posts'] = $posts;
        $data['users'] = $users;
        $data['comments'] = $comments;
        require $this->Twig('dashboard', $categories, 'categories');
    }
}