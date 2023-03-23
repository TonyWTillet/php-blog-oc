<?php

namespace App\Service;


class RoutingService
{
    /**
     * The index function of the FrontController. It is the first function called when the user access the website.
     */
    public static function route(): void
    {

        $link = $_SERVER['REQUEST_URI'];
        $link_array = explode('/', $link);
        $redirect = $link_array[1];

        if ($redirect == 'panel') {
            $url = explode('/', $_SERVER['REQUEST_URI']);
            $page = $url[2];
            if (!empty($url[3])) {
                $action = explode('?', $url[3])[0];
            }
            if (empty($url[3])) {
                $action = 'index';
            }
            if (empty($url[2]) && empty($url[3])) {
                $page = 'login';
                $action = 'logger';
            }
            if (empty($url[3]) && $url[2] == 'login') {
                $action = 'login';
            }

            $controller = 'App\Controller\\Back\\' . ucfirst($page) . 'Controller';
            if (!class_exists($controller)) {
                $controller = 'App\Controller\\Front\\ErrorController';
            }
            if (!method_exists($controller, $action)) {
                $controller = 'App\Controller\\Front\\ErrorController';
                $action = 'index';
            }
            $controller = new $controller();

            // INTERFACE REQUIRE AUTHENTIFICATION
            $authentificationService = new AuthentificationService();
            if ($authentificationService->verifyAuthentification($controller)) {
                $authentificationService->login();
            }

            $controller->$action();
        } else {
            $url = explode('/', $_SERVER['REQUEST_URI']);
            $page = $url[1];
            if (!empty($url[2])) {
                $action = explode('?', $url[2])[0];
            }
            if (empty($url[1])) {
                $page = 'index';
            }
            if ($url[1] == 'article') {
                $action = 'index';
            }
            if (empty($url[2])) {
                $action = 'index';
            }

            $controller = 'App\Controller\\Front\\' . ucfirst($page) . 'Controller';
            if (!class_exists($controller)) {
                $controller = 'App\Controller\\Front\\ErrorController';
            }
            if (!method_exists($controller, $action)) {
                $controller = 'App\Controller\\Front\\ErrorController';
                $action = 'index';
            }
            $controller = new $controller();
            $controller->$action();
        }
    }
}
