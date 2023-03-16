<?php

namespace App\Service;

use App\Middleware\Database;
use PDOException;

class RowCounter extends Database
{
    public function __construct()
    {
        parent::__construct('blog_posts');
    }
    public function getRowsNumber(string $table): string {
        try {
            $req = $this->getPDO()->query("SELECT COUNT(*) FROM $table");
            $counter = $req->fetchColumn();
            if (!$counter) {
                return '0';
            }
            return $counter;

        } catch(PDOException $e) {
            throw new \Exception('Error while, counting  '. $e->getMessage());
        }
    }
}
