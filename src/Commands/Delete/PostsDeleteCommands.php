<?php

namespace App\Commands\Delete;

class PostsDeleteCommands extends DeleteCommands
{
    public function __construct()
    {
        parent::__construct('blog_posts');
    }

    public function deletePost(int $id): void
    {
        $this->delete($id);
    }

}