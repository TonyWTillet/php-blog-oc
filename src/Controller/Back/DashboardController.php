<?php

namespace App\Controller\Back;

use App\Controller\RequireAuhtentificationInterface;
use App\Queries\CategoryQueries;
use App\Service\RowCounter;

class DashboardController extends BackController implements RequireAuhtentificationInterface
{
    private CategoryQueries $categoryService;
    private RowCounter $counter;

    public function __construct()
    {
        $this->categoryService = new CategoryQueries();
        $this->counter = new RowCounter();
    }

    /**
     * @throws \Exception
     */
    public function index()
    {
        $data['categories'] = $this->counter->getRowsNumber('blog_categories');
        $data['posts'] = $this->counter->getRowsNumber('blog_posts');
        $data['users'] = $this->counter->getRowsNumber('blog_users');
        $data['comments'] = $this->counter->getRowsNumber('blog_comments');
        require $this->twig('dashboard', $data, 'data');
    }
}