<?php

namespace App\Commands\Accept;

class UsersAcceptCommands extends AcceptCommands

{
    public function __construct()
    {
        parent::__construct('blog_users');
    }

    public function acceptUsers(int $id): void
    {
        $this->accept($id);
    }
}
