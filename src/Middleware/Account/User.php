<?php

namespace App\Middleware\Account;

use PDO;
use PDOException;

class User
{
    public function getUser(string $login):array {

        try {
            $pdo = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME.";charset=utf8", DB_USER,DB_PASS);
            $req = $pdo->prepare("SELECT * FROM users WHERE email=? LIMIT 1");
            $req->execute(array($login));
            $panel_users=$req->fetch(PDO::FETCH_ASSOC);
            if (!$panel_users) {
                return [];
            }
            return $panel_users;

        } catch(PDOException $e) {
            echo $e->getMessage();
        }

    }

    public function selectUsers()
    {
        global $pdo, $globale;
        try {
            $req = $pdo->prepare("SELECT id, user, email, role FROM users");
            $req->execute(array());
            $globale = $req->fetchAll(PDO::FETCH_OBJ);
            if (!$globale) {
                return new \stdClass();
            }
            return $globale;
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }
}