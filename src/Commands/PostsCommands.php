<?php

namespace App\Commands;

class PostsCommands extends Commands
{
    public function __construct()
    {
        parent::__construct('blog_posts');
    }

    public function deletePost(int $id): bool
    {
        $this->delete($id);
        return true;
    }

}