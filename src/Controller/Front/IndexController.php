<?php

namespace App\Controller\Front;

use App\Queries\CategoryQueries;
use App\Queries\GlobalsQueries;
use Exception;

class IndexController extends FrontController
{
    private GlobalsQueries $globalsQueries;
    private CategoryQueries $categoryQueries;

    public function __construct()
    {
        $this->globalsQueries = new GlobalsQueries();
        $this->categoryQueries = new CategoryQueries();
    }

    /**
     * @throws Exception
     */
    public function index()
    {
        $categories = $this->categoryQueries->getCategories();
        require $this->Twig('home', $categories, 'categories');
    }
}