<?php

namespace App\Controller\Back;

use App\Commands\Add\AddPostsCommands;
use App\Commands\Delete\PostsDeleteCommands;
use App\Commands\Edit\PostsEditCommands;
use App\Controller\RequireAuhtentificationInterface;
use App\Queries\CategoryQueries;
use App\Queries\PostQueries;

class MesarticlesController extends BackController implements RequireAuhtentificationInterface
{
    private PostQueries $postQueries;
    private PostsDeleteCommands $postCommands;
    private PostsEditCommands $postsEditCommands;

    private AddPostsCommands $addPostsCommands;
    private CategoryQueries $categoryQueries;

    /**
     * The constructor function is called when the class is instantiated. It is used to initialize the class
     */
    public function __construct()
    {
        $this->postQueries = new PostQueries();
        $this->postCommands = new PostsDeleteCommands();
        $this->postsEditCommands = new PostsEditCommands();
        $this->addPostsCommands = new AddPostsCommands();
        $this->categoryQueries = new CategoryQueries();
    }

    /**
     * It gets all the posts from the database and displays them on the page
     */
    public function index(): void
    {

        $articles = $this->postQueries->getPostsByUser($_SESSION['user']['id']);
        require $this->twig('mesarticles', $articles, 'articles');
    }

    public function edit(): void {
        $article= $this->postQueries->getPostById($_GET['id']);
        $this->postsEditCommands->save($_POST, $_GET['id']);
        require $this->twig('edit-mesarticle', $article, 'article');
    }

    public function add(): void {
        $categories = $this->categoryQueries->getCategories();
        $this->addPostsCommands->add($_POST, $_SESSION['user']['id']);
        require $this->twig('add-article', $categories, 'categories');
    }

    public function delete(): void {
        $this->postCommands->deletePost($_GET['id']);
    }
}
