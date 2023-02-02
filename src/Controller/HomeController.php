<?php

namespace App\Controller;

use App\Service\AuthentificationService;


class HomeController
{
    /**
     * The index function of the FrontController. It is the first function called when the user access the website.
     */
    public function index() {

        $link = $_SERVER['REQUEST_URI'];
        $link_array = explode('/',$link);
        $redirect = $link_array[1];

        if ($redirect == 'panel') {
            $url = explode('/', $_SERVER['REQUEST_URI']);

            $page = $url[2];
            $action = explode('?',$url[3])[0];
            if (empty($url[3])) {
                $action = 'index';
            }
            if (empty($url[2]) && empty($url[3])) {
                $page = 'login';
                $action = 'logger';
            }
            if (empty($url[3]) &&  $url[2] == 'login') {
                $action = 'login';
            }

            $controller = 'App\Controller\\Back\\' . ucfirst($page) . 'Controller';
            $controller = new $controller();

            // INTERFACE REQUIRE AUTHENTIFICATION
            $authentificationService = new AuthentificationService();
            if ($authentificationService->verifyAuthentification($controller)) {
                $authentificationService->login();
            }
            $controller->$action();
        }

        else {
            $url = explode('/', $_SERVER['REQUEST_URI']);

            $page = $url[1];
	        $action = count($url) > 2 ? explode('?', $url[2])[0] : 'index';
            if (empty($url[1])) {
                $page = 'index';
            }
            if ($url[1] == 'article') {
                $action = 'index';
            }
            if (count($url) > 2 && empty($url[2])) {
                $action = 'index';
            }

            $controller = 'App\Controller\\Front\\' . ucfirst($page) . 'Controller';
            $controller = new $controller();

            $controller->$action();
        }


    }


}
