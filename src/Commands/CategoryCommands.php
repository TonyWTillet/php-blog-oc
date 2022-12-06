<?php

namespace App\Commands;

class CategoryCommands extends Commands
{
    public function __construct()
    {
        parent::__construct('blog_categories');
    }

    public function deleteCategory(int $id): bool
    {
        $this->delete($id);
        return true;
    }

}