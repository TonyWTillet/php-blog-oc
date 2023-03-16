<?php

namespace App\Commands\Delete;

class UsersDeleteCommands extends DeleteCommands
{
    public function __construct()
    {
        parent::__construct('blog_users');
    }

    public function deleteUser(int $id): void
    {
        $this->delete($id);
    }
}
