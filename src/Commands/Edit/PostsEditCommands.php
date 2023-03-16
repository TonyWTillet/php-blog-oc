<?php

namespace App\Commands\Edit;

class PostsEditCommands extends EditCommands
{
    public function __construct()
    {
        parent::__construct('blog_posts');

    }

    public function save(array $data, int $id): void
    {
       if (!$this->verifications->postVerifications()) {
           return;
       }
        $current_date = date('Y-m-d');
        $timestamp = strtotime($current_date);
        $date = date("d/m/Y", $timestamp);

       $data = [
           'post_title' => $data['article_title'],
           'post_chapo' => $data['article_chapo'],
           'post_text' => $data['article_text'],
           'modified_at' => $date,
           'id' => $id,
       ];
        $sql = "UPDATE $this->table SET post_title=:post_title, post_chapo=:post_chapo, post_text=:post_text, modified_at=:modified_at WHERE id=:id";
        $req = $this->getPDO()->prepare($sql);
        $req->execute($data);
        $this->validator->redirectParentPage();
    }
}
