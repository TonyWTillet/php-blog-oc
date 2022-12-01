<?php

namespace App\Entity;

final class Inscriptions
{

    private int $id;
    private string $first_name;
    private string $last_name;
    private string $user_name;
    private string $email;
    private $created_at;

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->first_name;
    }

    public function getLastName(): string
    {
        return $this->last_name;
    }

    public function getUserName(): string
    {
        return $this->user_name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getCreateAt(): string
    {
        return $this->created_at;
    }
}