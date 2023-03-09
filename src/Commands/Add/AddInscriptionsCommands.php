<?php

namespace App\Commands\Add;

use App\Commands\SecurePost;
use PDOException;

class AddInscriptionsCommands extends AddCommands
{
    private SecurePost $securePost;

    public function __construct()
    {
        $this->table = 'blog_users';
        $this->securePost = new SecurePost();
    }

    public function add(array $data): array {
        foreach ($data as $key => $value) {
            if (empty($value)) {
                return [
                    'error' => true,
                    'message' => 'Veuillez remplir le champs : ' . ucfirst(strtolower($key))  . '.',
                ];
            }
        }
        $data = [
            'user_name' => $data['user_name'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => password_hash($data['password'], PASSWORD_DEFAULT),
            'flag' => 0,
        ];
        $data = $this->securePost->SecurePost($data);
        try {
            $sql = "INSERT INTO $this->table (user_name, first_name, last_name, email,  password, flag) VALUES (:user_name, :first_name, :last_name, :email, :password, :flag)";
            $req= $this->getPDO()->prepare($sql);
            $req->execute($data);
            return [
                'error' => false,
                'message' => 'Votre inscription à bien été prise en compte, elle est en attente de validation par un administrateur.',
            ];
        } catch (PDOException $e){
            return [
                'error' => true,
                'message' => 'Impossible de traiter les données. Merci de contacter l\'administrateur du site. Errror code :' . $e->getCode() . ' Message : ' . $e->getMessage(),
            ];
        }

    }
}