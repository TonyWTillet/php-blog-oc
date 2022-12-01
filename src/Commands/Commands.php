<?php

namespace App\Commands;

use App\Middleware\Database;

class Commands extends Database
{
    private string $table;

    public function __construct(string $table)
    {
        $this->table = $table;
    }

    public function delete(int $id): bool
    {
        $query = $this->getPDO()->prepare("DELETE FROM $this->table WHERE id = ?");
        $query->execute($id);
        return true;
    }
}