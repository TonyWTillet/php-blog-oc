<?php

namespace App\Controller\Front;

use App\Queries\CategoryQueries;
use App\Queries\CommentQueries;
use App\Queries\GlobalsQueries;
use App\Queries\PostQueries;
use App\Queries\UserQueries;
use App\Trait\DateFormat;

class ArticleController extends FrontController
{
    private GlobalsQueries $globalsQueries;
    private PostQueries $postQueries;
    private DateFormat $dateFormat;
    private CommentQueries $commentQueries;

    public function __construct()
    {
        $this->globalsQueries = new GlobalsQueries();
        $this->postQueries = new PostQueries();
        $this->dateFormat = new DateFormat();
        $this->commentQueries = new CommentQueries();
    }

    /**
     * @throws Exception
     */
    public function index()
    {
        $url = explode('/', $_SERVER['REQUEST_URI']);
        $postId = $url[2];
        $globals = $this->globalsQueries->getGlobals();
        $posts = $this->postQueries->getPostById($postId);
        $comments = $this->commentQueries->getCommentsByPostId($postId);
        $data['globals'] = $globals;
        $data['posts'] = $posts;
        require $this->Twig('post', $data, 'data');
    }

}