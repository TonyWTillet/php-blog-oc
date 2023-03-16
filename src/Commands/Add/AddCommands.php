<?php

namespace App\Commands\Add;

use App\Commands\PostVerifications;
use App\Commands\RedirectParent;
use App\Middleware\Database;

class AddCommands extends Database
{
    protected string $table;
    protected PostVerifications $verifications;
    protected RedirectParent $validator;
    public function __construct(string $table)
    {
        $this->table = $table;
        $this->verifications = new PostVerifications();
        $this->validator = new RedirectParent();
    }

    public function getLastId(): int {
        $sql = $this->getPDO()->query("SELECT id FROM $this->table ORDER BY id DESC LIMIT 1");
        $id = $sql->fetch();
        $lastId = $id['id'] + 1;
        return $lastId;
    }

}
