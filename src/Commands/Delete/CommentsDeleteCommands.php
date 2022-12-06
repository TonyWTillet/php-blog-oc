<?php

namespace App\Commands\Delete;

class CommentsDeleteCommands extends DeleteCommands
{
    public function __construct()
    {
        parent::__construct('blog_comments');
    }

    public function deleteComment(int $id): void
    {
        $this->delete($id);
    }
}