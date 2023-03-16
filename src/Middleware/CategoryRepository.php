<?php

namespace App\Middleware;

use App\Entity\Category;
use PDO;
use PDOException;

class CategoryRepository extends Database
{
    public function __construct()
    {
        parent::__construct('blog_categories');
    }


    /**
     * It selects all categories from the database and returns them as an object
     *
     * @return Category[] An object
     * @throws \Exception
     */
    public function findAllCategories(): array
    {
        try {
            $req = $this->getPDO()->prepare("SELECT a.*, b.id as articlesId, b.category_id, COUNT(b.category_id) AS nb FROM $this->table a LEFT JOIN blog_posts b ON a.id = b.category_id  GROUP BY a.id, b.category_id");
            $req->execute(array());
            $categories=$req->fetchAll(PDO::FETCH_CLASS, Category::class);
            if (!$categories) {
                return [];
            }
            return $categories;

        } catch(PDOException $e) {
            throw new \Exception('Error while, fetching categories '. $e->getMessage());
        }

    }

    public function getCategoryById(int $id): array
    {
        try {
            $req = $this->getPDO()->prepare("SELECT * FROM $this->table WHERE id = ?");
            $req->execute(array($id));
            $categories=$req->fetchAll(PDO::FETCH_CLASS, Category::class);
            if (!$categories) {
                return [];
            }
            return $categories;

        } catch(PDOException $e) {
            throw new \Exception('Error while, fetching categories '. $e->getMessage());
        }
    }


}
