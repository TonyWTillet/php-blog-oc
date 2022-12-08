<?php

namespace App\Middleware;

use App\Entity\Globals;
use App\Entity\Inscriptions;
use PDO;
use PDOException;

class InscriptionsRepository extends Database
{
    public function __construct()
    {
        parent::__construct('blog_users');
    }

    /**
     * It selects all globals informations from the database and returns them as an object
     *
     * @return Inscriptions[] An object
     * @throws \Exception
     */
    public function findAllInscriptions(): array
    {
        try {
            $req = $this->getPDO()->prepare("SELECT * FROM $this->table WHERE flag = 0 ORDER BY created_at DESC");
            $req->execute(array());
            $inscriptions=$req->fetchAll(PDO::FETCH_CLASS, Inscriptions::class);
            if (!$inscriptions) {
                return [];
            }
            return $inscriptions;

        } catch(PDOException $e) {
            throw new \Exception('Error while, fetching inscriptions '. $e->getMessage());
        }

    }
}