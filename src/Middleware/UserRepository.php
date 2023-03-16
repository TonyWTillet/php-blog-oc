<?php

namespace App\Middleware;

use App\Entity\Category;
use App\Entity\User;
use PDO;
use PDOException;

class UserRepository extends Database
{
    public function __construct()
    {
        parent::__construct('blog_users');
    }


    /**
     * It selects all categories from the database and returns them as an object
     *
     * @return Category[] An object
     * @throws \Exception
     */
    public function findAllActiveUsers(): array
    {
        try {
            $req = $this->getPDO()->prepare("SELECT * FROM $this->table WHERE flag = ?");
            $req->execute(array(1));
            $categories=$req->fetchAll(PDO::FETCH_CLASS, User::class);
            if (!$categories) {
                return [];
            }
            return $categories;

        } catch(PDOException $e) {
            throw new \Exception('Error while, fetching categories '. $e->getMessage());
        }

    }

    public function findAllUsers(): array
    {
        try {
            $req = $this->getPDO()->prepare("SELECT * FROM $this->table");
            $req->execute(array());
            $categories=$req->fetchAll(PDO::FETCH_CLASS, User::class);
            if (!$categories) {
                return [];
            }
            return $categories;

        } catch(PDOException $e) {
            throw new \Exception('Error while, fetching categories '. $e->getMessage());
        }

    }

    public function getUserById(int $id): array
    {
        try {
            $req = $this->getPDO()->prepare("SELECT * FROM $this->table WHERE id = ?");
            $req->execute(array($id));
            $categories=$req->fetchAll(PDO::FETCH_CLASS, User::class);
            if (!$categories) {
                return [];
            }
            return $categories;

        } catch(PDOException $e) {
            throw new \Exception('Error while, fetching user by id '. $e->getMessage());
        }

    }


}
