<?php

namespace App\Entity;

use App\Trait\DateFormat;

class User
{
    private int $id;
    private string $user_name;
    private string $first_name;
    private string $last_name;
    private string $email;
    private string $created_at;
    private string $flag;

    private dateFormat $dateFormat;
    private string $role;

    public function __construct()
    {
        $this->dateFormat = new DateFormat();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getUserName(): string
    {
        return $this->user_name;
    }

    public function getFirstName(): string
    {
        return $this->first_name;
    }

    public function getLastName(): string
    {
        return $this->last_name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getCreatedAt(): string
    {
        $this->created_at = $this->dateFormat->modifyDateFormat($this->created_at);
        return $this->created_at;
    }

    public function getFlag(): int
    {
        return $this->flag;
    }

    public function getRole(): string
    {
        return $this->role;
    }
}