<?php

namespace App\Commands\Edit;

use App\Commands\PostVerifications;
use App\Commands\RedirectParent;
use App\Middleware\Database;

class EditCommands extends Database
{
    protected string $table;
    protected RedirectParent $validator;
    protected PostVerifications $verifications;

    public function __construct(string $table)
    {
        $this->table = $table;
        $this->validator = new RedirectParent();
        $this->verifications = new PostVerifications();
    }
}
