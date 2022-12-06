<?php

namespace App\Controller\Back;



use App\Commands\Delete\CommentsDeleteCommands;
use App\Controller\RequireAuhtentification;
use App\Queries\CommentQueries;

class CommentsController extends BackController implements RequireAuhtentification
{
    private CommentQueries $commentQueries;
    private CommentsDeleteCommands $commentsCommands;

    public function __construct()
    {
        $this->commentQueries = new CommentQueries();
        $this->commentsCommands = new CommentsDeleteCommands();
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

    public function delete() {
        $this->commentsCommands->deleteComment($_GET['id']);
    }
}