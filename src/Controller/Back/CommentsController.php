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

        require $this->Twig('comments', $comments, 'comments');
    }

    public function validate()
    {

        $comments = $this->commentQueries->getCommentsValidate();


        require $this->Twig('comments_validate', $comments, 'comments');
    }
}