<?php

namespace App\Queries;

use App\Entity\Post;
use App\Middleware\PostRepository;

class PostQueries
{
    private postRepository $postRepository;

    public function __construct()
    {
        $this->postRepository = new PostRepository();
    }

    /**
     * It gets all the categories from the database.
     *
     * @return Post[] The categories are being returned.
     * @throws \Exception
     */
    public function getPosts(): array
    {
        return $this->postRepository->findAllPosts();
    }

    public function getPostById(int $id): array
    {
        return $this->postRepository->findPostById($id);
    }

}