<?php

namespace App\Controller\Back;



use App\Commands\Accept\CommentsAcceptCommands;
use App\Commands\Delete\CommentsDeleteCommands;
use App\Controller\RequireAuhtentificationInterface;
use App\Queries\CommentQueries;

class CommentsController extends BackController implements RequireAuhtentificationInterface
{
    private CommentQueries $commentQueries;
    private CommentsDeleteCommands $commentsCommands;
    private CommentsAcceptCommands $commentsAcceptCommands;

    public function __construct()
    {
        $this->commentQueries = new CommentQueries();
        $this->commentsCommands = new CommentsDeleteCommands();
        $this->commentsAcceptCommands = new CommentsAcceptCommands();
    }

    public function index()
    {
        $comments = $this->commentQueries->getComments();
        require $this->twig('comments', $comments, 'comments');
    }

    public function validate()
    {
        $comments = $this->commentQueries->getCommentsValidate();
        require $this->twig('comments_validate', $comments, 'comments');
    }

    public function accept() {
        $this->commentsAcceptCommands->acceptComments($_GET['id']);
    }
    public function delete() {
        $this->commentsCommands->deleteComment($_GET['id']);
    }
}
