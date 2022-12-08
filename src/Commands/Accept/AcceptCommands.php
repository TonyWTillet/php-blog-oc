<?php

namespace App\Commands\Accept;

use App\Commands\RedirectParent;
use App\Middleware\Database;

class AcceptCommands extends Database
{
    protected string $table;
    private RedirectParent $validator;

    public function __construct(string $table)
    {
        $this->table = $table;
        $this->validator = new RedirectParent();
    }

    public function accept(int $id): void
    {
        $query = $this->getPDO()->prepare("UPDATE $this->table SET flag=?  WHERE id = ?");
        $query->execute(array(1, $id));
        $this->validator->redirectParentPage();
    }


}
