<?php

namespace App\Entity;

final class Category
{
    private int $id;
    private string $category_title;

    public function getId(): int
    {
        return $this->id;
    }

    public function getCategoryTitle(): string
    {
        return $this->category_title;
    }
}