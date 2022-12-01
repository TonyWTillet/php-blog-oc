<?php

namespace App\Controller\Back;

use App\Controller\RequireAuhtentification;
use App\Queries\PostQueries;

class ArticlesController extends BackController implements RequireAuhtentification
{
    private PostQueries $postQueries;

    /**
     * The constructor function is called when the class is instantiated. It is used to initialize the class
     */
    public function __construct()
    {
        $this->postQueries = new PostQueries();
    }

    /**
     * It gets all the posts from the database and displays them on the page
     */
    public function index()
    {

        $articles = $this->postQueries->getPosts();


        require $this->Twig('articles', $articles, 'articles');
    }

    public function edit() {

        $article= $this->postQueries->getPostById($_GET['id']);
        require $this->Twig('edit-article', $article, 'article');
    }

    public function add() {
        require $this->Twig('add-article', $error, 'error');
    }
}