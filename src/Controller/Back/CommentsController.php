<?php

namespace App\Controller\Back;


use App\Queries\CommentQueries;

class CommentsController extends BackController
{
    private CommentQueries $commentQueries;

    public function __construct()
    {
        $this->commentQueries = new CommentQueries();
    }

    public function index()
    {
        $this->login();

        $comments = $this->commentQueries->getComments();

        echo $this->Twig()->render('comments.twig', [
            'error' => $error,
            'comments' => $comments
        ]);
    }

    public function validate()
    {
        $this->login();

        $comments = $this->commentQueries->getCommentsValidate();


        echo $this->Twig()->render('comments_validate.twig', [
            'error' => $error,
            'comments' => $comments
        ]);
    }
}