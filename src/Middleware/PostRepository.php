<?php

namespace App\Middleware;

use App\Entity\Post;
use PDO;
use PDOException;

class PostRepository extends Database
{
    public function __construct()
    {
        parent::__construct('blog_posts');
    }


    /**
     * It selects all categories from the database and returns them as an object
     *
     * @return Post[] An object
     * @throws \Exception
     */
    public function findAllPosts(): array
    {
        try {
            $req = $this->getPDO()->prepare("SELECT a.*, b.id as categoriesId, b.category_title FROM $this->table a LEFT JOIN blog_categories b ON b.id = a.category_id ORDER BY a.created_at DESC");
            $req->execute(array());
            $categories=$req->fetchAll(PDO::FETCH_CLASS, Post::class);
            if (!$categories) {
                return [];
            }
            return $categories;

        } catch(PDOException $e) {
            throw new \Exception('Error while, fetching categories '. $e->getMessage());
        }

    }

    public function findPostById(int $id): array
    {
        try {
            $req = $this->getPDO()->prepare("SELECT a.*, b.id as categoriesId, b.category_title FROM $this->table a LEFT JOIN blog_categories b ON b.id = a.category_id WHERE a.id = ?");
            $req->execute(array($id));
            $categories=$req->fetchAll(PDO::FETCH_CLASS, Post::class);
            if (!$categories) {
                return [];
            }
            dump($categories);
            return $categories;

        } catch(PDOException $e) {
            throw new \Exception('Error while, fetching categories '. $e->getMessage());
        }

    }

}
