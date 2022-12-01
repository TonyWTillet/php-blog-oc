<?php

namespace App\Entity;

final class Post
{
    private int $id;
    private int|null $category_id;
    private int $user_id;
    private string $post_title;
    private string $post_text;
    private string $post_chapo;
    private $created_at;
    private $modified_at;
    private string $nav_url;

    public function getId(): int
    {
        return $this->id;
    }

    public function getCategoryId(): int|null
    {
        return $this->category_id;
    }

    public function getUserId(): int
    {
        return $this->user_id;
    }

    public function getPostTitle(): string
    {
        return $this->post_title;
    }

    public function getPostText(): string
    {
        return $this->post_text;
    }

    public function getPostChapo(): string
    {
        return $this->post_chapo;
    }

    public function getCreated(): string
    {
        return $this->created_at;
    }

    public function getModified(): string
    {
        return $this->modified_at;
    }

    public function getNavUrl(): string
    {
        return $this->nav_url;
    }
}