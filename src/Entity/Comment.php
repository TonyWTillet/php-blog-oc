<?php

namespace App\Entity;

final class Comment
{
    private int $id;
    private int $user_id;
    private int $post_id;
    private string $comment_text;
    private string $created_at;
    private int $flag;
    private string $post_title;
    private string $user_name;

    public function getId(): int
    {
        return $this->id;
    }

    public function getPostId(): int
    {
        return $this->post_id;
    }

    public function getUserId(): int
    {
        return $this->user_id;
    }

    public function getCommentText(): string
    {
        return $this->comment_text;
    }

    public function getCreated(): string
    {
        return $this->created_at;
    }

    public function getFlag(): int
    {
        return $this->flag;
    }

    public function getPostTitle(): string
    {
        return $this->post_title;
    }

    public function getUserName(): string
    {
        return $this->user_name;
    }

}
