<?php

namespace App\Middleware;

use App\Entity\Comment;
use PDO;
use PDOException;

class CommentRepository extends Database
{
    public function __construct()
    {
        parent::__construct('blog_comments');
    }


    /**
     * It selects all categories from the database and returns them as an object
     *
     * @return Comment[] An object
     * @throws \Exception
     */
    public function findAllComments(): array
    {
        try {
            $req = $this->getPDO()->prepare("SELECT a.*, b.id as articlesId, b.post_title FROM $this->table a LEFT JOIN blog_posts b ON b.id = a.post_id WHERE a.flag = 0 ORDER BY a.created_at DESC");
            $req->execute(array());
            $comments=$req->fetchAll(PDO::FETCH_CLASS, Comment::class);
            if (!$comments) {
                return [];
            }
            return $comments;

        } catch(PDOException $e) {
            throw new \Exception('Error while, fetching posts '. $e->getMessage());
        }

    }

    public function findAllCommentsValidate(): array
    {
        try {
            $req = $this->getPDO()->prepare("SELECT a.*, b.id as articlesId, b.post_title FROM $this->table a LEFT JOIN blog_posts b ON b.id = a.post_id WHERE a.flag = 1 ORDER BY a.created_at DESC");
            $req->execute(array());
            $comments=$req->fetchAll(PDO::FETCH_CLASS, Comment::class);
            if (!$comments) {
                return [];
            }
            return $comments;

        } catch(PDOException $e) {
            throw new \Exception('Error while, fetching comments '. $e->getMessage());
        }

    }

}