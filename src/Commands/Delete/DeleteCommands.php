<?php

namespace App\Commands\Delete;

use App\Commands\RedirectParent;
use App\Middleware\Database;

class DeleteCommands extends Database
{
    protected string $table;
    private RedirectParent $validator;

    public function __construct(string $table)
    {
        $this->table = $table;
        $this->validator = new RedirectParent();
    }

    public function delete(int $id): void
    {
        $query = $this->getPDO()->prepare("DELETE FROM $this->table WHERE id = ?");
        $query->execute(array($id));
        $this->validator->redirectParentPage();
    }


}