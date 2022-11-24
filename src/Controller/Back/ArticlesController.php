<?php

namespace App\Controller\Back;

use App\Controller\RequireAuhtentification;
use App\Queries\PostQueries;

class ArticlesController extends BackController implements RequireAuhtentification
{
    private PostQueries $postQueries;

    public function __construct()
    {
        $this->postQueries = new PostQueries();
    }

    public function index()
    {

        $articles = $this->postQueries->getPosts();


        echo $this->Twig()->render('articles.twig', [
            'error' => $error,
            'articles' => $articles
        ]);
    }
}