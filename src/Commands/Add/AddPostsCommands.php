<?php

namespace App\Commands\Add;

class AddPostsCommands extends AddCommands
{
    public function __construct()
    {
        parent::__construct('blog_posts');
    }

    public function add(array $data, int $userID): void {
        if (empty($data['article_category']) && empty($data['user_id']) && empty($data['article_title'])) {
           return 'Veuillez remplir tous les champs';
        }
        $data = [
            'id' => $id,
            'category_id' => $data['article_category'],
            'user_id' => $userID,
            'post_title' => $data['article_title'],
            'post_chapo' => $data['article_chapo'],
            'post_text' => $data['article_text'],
            'nav_url' => $data['id'].'-'.$data['article_title'],
        ];

        $sql = "INSERT INTO $this->table (id, category_id, user_id, post_title, post_text, post_chapo, nav_url) VALUES (:id, :category_id, :user_id, :post_title, :post_text, :post_chapo, :nav_url)";
        $req= $this->getPDO()->prepare($sql);
        $req->execute($data);
    }
}