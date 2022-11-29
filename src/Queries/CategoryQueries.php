<?php

namespace App\Queries;

use App\Entity\Category;
use App\Middleware\CategoryRepository;

class CategoryQueries
{
    private categoryRepository $categoryRepository;

    public function __construct()
    {
        $this->categoryRepository = new CategoryRepository();
    }

    /**
     * It gets all the categories from the database.
     *
     * @return Category[] The categories are being returned.
     * @throws \Exception
     */
    public function getCategories(): array
    {
       return $this->categoryRepository->findAllCategories();
    }

    public function getCategoryById(int $id): array
    {
        return $this->categoryRepository->getCategoryById($id);
    }
}