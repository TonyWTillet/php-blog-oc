<?php

namespace App\Controller\Back;


use App\Controller\RequireAuhtentification;
use App\Queries\CommentQueries;

class CommentsController extends BackController implements RequireAuhtentification
{
    private CommentQueries $commentQueries;

    public function __construct()
    {
        $this->commentQueries = new CommentQueries();
    }

    public function index()
    {

        $comments = $this->commentQueries->getComments();

        echo $this->Twig()->render('comments.twig', [
            'error' => $error,
            'comments' => $comments
        ]);
    }

    public function validate()
    {

        $comments = $this->commentQueries->getCommentsValidate();


        echo $this->Twig()->render('comments_validate.twig', [
            'error' => $error,
            'comments' => $comments
        ]);
    }
}