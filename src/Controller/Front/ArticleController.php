<?php

namespace App\Controller\Front;

use App\Commands\Add\AddCommentCommands;
use App\Queries\CategoryQueries;
use App\Queries\CommentQueries;
use App\Queries\GlobalsQueries;
use App\Queries\PostQueries;
use App\Queries\UserQueries;
use App\Trait\DateFormat;
use Exception;

class ArticleController extends FrontController
{
    private GlobalsQueries $globalsQueries;
    private PostQueries $postQueries;
    private DateFormat $dateFormat;
    private CommentQueries $commentQueries;
    private AddCommentCommands $addCommentCommands;

    public function __construct()
    {
        $this->globalsQueries = new GlobalsQueries();
        $this->postQueries = new PostQueries();
        $this->dateFormat = new DateFormat();
        $this->commentQueries = new CommentQueries();
        $this->addCommentCommands = new AddCommentCommands();
    }

    /**
     * @throws Exception
     */
    public function index(): void
    {
        $url = explode('/', $_SERVER['REQUEST_URI']);
        if (strpos($url[2], "-") !== false) {
            $occurence = substr($url[2], 0, strpos($url[2],"-"));
            $postId = $occurence;
        } else {
            $postId = $url[2];
        }
        $globals = $this->globalsQueries->getGlobals();
        $posts = $this->postQueries->getPostById($postId);
        $comments = $this->commentQueries->getCommentsValidateByPostId($postId);
        $data['globals'] = $globals;
        $data['posts'] = $posts;
        $data['comments'] = $comments;
        $data['session'] = $_SESSION['user'];
        if (!empty($_POST)) {
            $data['message'] = $this->addCommentCommands->add($_POST, $_SESSION['user']['id']);
        }
        require $this->twig('post', $data, 'data');
    }

}
