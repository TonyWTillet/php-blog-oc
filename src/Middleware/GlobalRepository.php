<?php

namespace App\Middleware;

use App\Entity\Globals;
use PDO;
use PDOException;

class GlobalRepository extends Database
{
    public function __construct()
    {
        parent::__construct('blog_globals');
    }

    /**
     * It selects all globals informations from the database and returns them as an object
     *
     * @return Globals[] An object
     * @throws \Exception
     */
    public function findAllGlobals(): array
    {
        try {
            $req = $this->getPDO()->prepare("SELECT * FROM $this->table");
            $req->execute();
            $globals=$req->fetchAll(PDO::FETCH_CLASS, Globals::class);
            if (!$globals) {
                return [];
            }
            return $globals;

        } catch(PDOException $e) {
            throw new \Exception('Error while, fetching globals informations '. $e->getMessage());
        }

    }
}
