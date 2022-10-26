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
            $req = $this->getPDO()->prepare("SELECT * FROM $this->table");
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

}