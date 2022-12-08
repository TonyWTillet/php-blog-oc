<?php

namespace App\Commands\Accept;



class CommentsAcceptCommands extends AcceptCommands

{
    public function __construct()
    {
        parent::__construct('blog_comments');
    }

    public function acceptComments(int $id): void
    {
        $this->accept($id);
    }
}