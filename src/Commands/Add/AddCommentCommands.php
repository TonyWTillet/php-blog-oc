<?php

namespace App\Commands\Add;

use App\Commands\SecurePost;

class AddCommentCommands extends AddCommands
{
    private SecurePost $securePost;

    public function __construct()
    {
        parent::__construct('blog_comments');
        $this->securePost = new SecurePost();
    }

    public function add(array $data, int $userID): string {
        if (empty($data['user_id']) && empty($data['post_id']) && empty($data['comment_text'])) {
            return 'Veuillez remplir tous les champs';
        }
        $data = [
            'post_id' => $data['post_id'],
            'user_id' => $userID,
            'comment_text' => $data['comment_text'],
            'created_at' => date('d/m/Y'),
            'flag' => 0,
        ];
        $data = $this->securePost->securePost($data);
        $sql = "INSERT INTO $this->table (post_id, user_id, comment_text, created_at, flag) VALUES (:post_id, :user_id, :comment_text, :created_at, :flag)";
        $req= $this->getPDO()->prepare($sql);
        $req->execute($data);
        return 'Votre commentaire à bien été ajouté, il est en attente de validation par un administrateur.';
    }
}