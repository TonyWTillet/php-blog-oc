<?php

namespace App\Middleware\Account;

use App\Middleware\Database;
use PDO;
use PDOException;

class User extends Database
{
    public function __construct(string $table = 'blog_users')
    {
        parent::__construct($table);
    }

    /**
     * It takes an email address as a parameter and returns an array of the user's information
     *
     * @param string email The email address of the user you want to get.
     *
     * @return array An array of the user's information.
     */
    public function getUser(string $email):array {
        try {
            $req = $this->getPDO()->prepare("SELECT * FROM $this->table WHERE email=? LIMIT 1");
            $req->execute(array($email));
            $panel_users=$req->fetch(PDO::FETCH_ASSOC);
            if (!$panel_users) {
                return [];
            }
            return $panel_users;

        } catch(PDOException $e) {
            echo $e->getMessage();
        }

    }

    /**
     * It selects all users from the database and returns them as an object
     *
     * @return \stdClass An object
     */
    public function selectUsers(): \stdClass
    {
        try {
            $req = $pdo->prepare("SELECT id, user, email, role FROM $this->table ORDER BY first_name ASC");
            $req->execute(array());
            $users = $req->fetchAll(PDO::FETCH_OBJ);
            if (!$users) {
                return new \stdClass();
            }
            return $users;
        } catch(PDOException $e) {
            echo $e->getMessage();
            return new \stdClass();
        }
    }
}
