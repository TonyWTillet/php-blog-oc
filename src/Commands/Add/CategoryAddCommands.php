<?php

namespace App\Commands\Add;

class CategoryAddCommands extends AddCommands
{
    public function __construct()
    {
        parent::__construct('blog_categories');
    }

    public function add(array $data): string {
        if (empty($data['category_title'])) {
            return 'Veuillez remplir tous les champs';
        }
        $data = [
            'category_title' => $data['category_title'],
        ];

        $sql = "INSERT INTO $this->table (category_title) VALUES (:category_title)";
        $req= $this->getPDO()->prepare($sql);
        $req->execute($data);
        return 'Nouvelle Catégorie créé';
    }
}
