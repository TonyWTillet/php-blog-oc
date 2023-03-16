<?php

namespace App\Queries;



use App\Controller\Back\BackController;
use App\Middleware\CommentRepository;

class CommentQueries extends BackController
{
    private commentRepository $commentRepository;

    public function __construct()
    {
        $this->commentRepository = new CommentRepository();
    }

    /**
     * It gets all the categories from the database.
     *
     * @return Comment[] The categories are being returned.
     * @throws \Exception
     */
    public function getComments(): array
    {
        return $this->commentRepository->findAllComments();
    }

    public function getCommentsByPostId(int $postId): array
    {
        return $this->commentRepository->findAllCommentsByPostId($postId);
    }

    public function getCommentsValidateByPostId(int $postId): array
    {
        return $this->commentRepository->findAllCommentsValidateByPostId($postId);
    }

    public function getCommentsValidate(): array
    {
        return $this->commentRepository->findAllCommentsValidate();
    }
}
