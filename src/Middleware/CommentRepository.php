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
            $req = $this->getPDO()->prepare("SELECT * FROM $this->table WHERE flag = 0 ORDER BY created_at DESC");
            $req->execute(array());
            $categories=$req->fetchAll(PDO::FETCH_CLASS, Comment::class);
            if (!$categories) {
                return [];
            }
            return $categories;

        } catch(PDOException $e) {
            throw new \Exception('Error while, fetching posts '. $e->getMessage());
        }

    }

    public function findAllCommentsValidate(): array
    {
        try {
            $req = $this->getPDO()->prepare("SELECT * FROM $this->table WHERE flag = 1 ORDER BY created_at DESC");
            $req->execute(array());
            $categories=$req->fetchAll(PDO::FETCH_CLASS, Comment::class);
            if (!$categories) {
                return [];
            }
            return $categories;

        } catch(PDOException $e) {
            throw new \Exception('Error while, fetching comments '. $e->getMessage());
        }

    }

}