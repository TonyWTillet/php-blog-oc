<?php

namespace App\Commands\Delete;

use App\Commands\Validator;
use App\Middleware\Database;

class DeleteCommands extends Database
{
    protected string $table;
    private Validator $validator;

    public function __construct(string $table)
    {
        $this->table = $table;
        $this->validator = new Validator();
    }

    public function delete(int $id): void
    {
        $query = $this->getPDO()->prepare("DELETE FROM $this->table WHERE id = ?");
        $query->execute(array($id));
        $this->validator->redirectParentPage();
    }


}