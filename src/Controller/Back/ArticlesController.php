<?php

namespace App\Controller\Back;

use App\Queries\PostQueries;

class ArticlesController extends BackController
{
    private PostQueries $postQueries;

    public function __construct()
    {
        $this->postQueries = new PostQueries();
    }

    public function index()
    {
        $this->login();

        $articles = $this->postQueries->getPosts();


        echo $this->Twig()->render('articles.twig', [
            'error' => $error,
            'articles' => $articles
        ]);
    }
}