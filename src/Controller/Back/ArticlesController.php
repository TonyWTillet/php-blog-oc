<?php

namespace App\Controller\Back;

use App\Commands\Add\AddPostsCommands;
use App\Commands\Delete\PostsDeleteCommands;
use App\Commands\Edit\PostsEditCommands;
use App\Controller\RequireAuhtentification;
use App\Queries\CategoryQueries;
use App\Queries\PostQueries;

class ArticlesController extends BackController implements RequireAuhtentification
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
    public function index()
    {

        $articles = $this->postQueries->getPosts();


        require $this->Twig('articles', $articles, 'articles');
    }

    public function edit() {
        $article= $this->postQueries->getPostById($_GET['id']);
        $this->postsEditCommands->save($_POST, $_GET['id']);
        require $this->Twig('edit-article', $article, 'article');
    }

    public function add() {
        $categories = $this->categoryQueries->getCategories();
        $this->addPostsCommands->add($_POST, $_SESSION['user']['id']);
        require $this->Twig('add-article', $categories, 'categories');
    }

    public function delete() {
        $this->postCommands->deletePost($_GET['id']);
    }
}