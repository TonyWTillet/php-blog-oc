<?php

namespace App\Commands\Edit;

use PDO;

class GlobalsEditCommands extends EditCommands
{
    public function __construct()
    {
        parent::__construct('blog_globals');

    }

    public function save(array $data): void
    {
       if (!$this->verifications->postVerifications()) {
           return;
       }
        $sql = "UPDATE $this->table SET value=? WHERE name=?";
        $req = $this->getPDO()->prepare($sql);
        foreach ($data as $key => $value) {
            if ($value) {
                $req->execute(array($value, $key));
            }
        }

    }
}