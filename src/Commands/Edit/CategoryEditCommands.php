<?php

namespace App\Commands\Edit;

class CategoryEditCommands extends EditCommands
{
    public function __construct()
    {
        parent::__construct('blog_categories');
    }

    public function save(string|null $categoryTitle, int $id): void
    {
       if (!$this->verifications->postVerifications() || empty($categoryTitle)) {
           return;
       }
        $sql = "UPDATE $this->table SET category_title=? WHERE id=?";
        $req = $this->getPDO()->prepare($sql);
        $req->execute(array($categoryTitle, $id));
    }
}
