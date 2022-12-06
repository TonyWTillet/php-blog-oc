<?php

namespace App\Commands\Delete;

class CategoryDeleteCommands extends DeleteCommands
{
    public function __construct()
    {
        parent::__construct('blog_categories');
    }

    public function deleteCategory(int $id): void
    {
        $this->delete($id);
    }

}