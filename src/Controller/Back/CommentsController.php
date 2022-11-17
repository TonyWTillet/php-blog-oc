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

        require (BACK_VIEW.'comments.php');
    }

    public function validate()
    {
        $this->login();

        $comments = $this->commentQueries->getCommentsValidate();


        require (BACK_VIEW.'comments_validate.php');
    }
}