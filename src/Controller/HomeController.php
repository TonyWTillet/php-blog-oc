<?php

namespace App\Controller;

use App\Controller\Front\FrontController;

class HomeController
{
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
            $controller->$action();
        }


    }


}