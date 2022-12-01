<?php

namespace App\Commands;

class CategoryCommands extends Commands
{
    public function __construct()
    {
        parent::__construct('blog_category');
    }

    public function deleteCategory(int $id): void
    {
        $this->delete($id);
    }

}