<?php

namespace App\Commands\Add;

use App\Commands\SecurePost;
use App\Commands\SendMail;
use PDOException;

class AddContactCommands extends AddCommands
{
    private string|false $model;
    private SendMail $sendMail;
    private SecurePost $securePost;

    public function __construct()
    {
       $this->table = 'blog_request_contact';
       $this->securePost = new SecurePost();
       $this->sendMail = new SendMail();
       $this->model = file_get_contents(BACK_VIEW . 'mail.twig');
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
            'name' => $data['name'],
            'message' => $data['message'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'created_at' => date('d/m/Y'),
        ];
        $data = $this->securePost->SecurePost($data);
        try {
            $sql = "INSERT INTO $this->table (name, message, email, phone, created_at) VALUES (:name, :message, :email, :phone, :created_at)";
            $req= $this->getPDO()->prepare($sql);
            $req->execute($data);
            $content = "
                <p>Nom :</p>
                <p> ". $data['name'] ." </p>
                <br>
                <p>Email :</p>
                <p>". $data['email'] ."</p>
                <br>
                <p>Téléphone :</p>
                <p>". $data['phone'] ."</p>
                <br>
                <p>Message :</p>
                <p>". $data['message'] ."</p>";
            $content = str_replace("##MESSAGE##", $content, $this->model);
            $this->sendMail->sendMail('Demande de contact', $content, 'tony.tillet@gmail.com');
            return [
                'error' => false,
                'message' => 'Votre demande de contact à bien été pris en compte, nous vous recontacterons au plus vite.',
            ];
        } catch (PDOException $e){
            return [
                'error' => true,
                'message' => 'Impossible de traiter les données. Merci de contacter l\'administrateur du site. Errror code :' . $e->getCode() . ' Message : ' . $e->getMessage(),
            ];
        }

    }
}