<?php

namespace App\Queries;

use App\Entity\Category;
use App\Middleware\UserRepository;

class UserQueries
{
    private userRepository $userRepository;

    public function __construct()
    {
        $this->userRepository = new UserRepository();
    }

    /**
     * It gets all the categories from the database.
     *
     * @return Category[] The categories are being returned.
     * @throws \Exception
     */
    public function getUsers(): array
    {
       return $this->userRepository->findAllUsers();
    }

    /**
     * @throws \Exception
     */
    public function getActiveUsers(): array
    {
        return $this->userRepository->findAllActiveUsers();
    }
}
