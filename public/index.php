<?php
session_start();
require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use App\Controller\HomeController;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'../');
$dotenv->load();

/*$loader = new Twig\Loader\FilesystemLoader(__DIR__ . '/views/back');
$twig = new Twig\Environment($loader, [
    'cache' => false,
    'debug' => true,
]);*/

$homeController = new HomeController();

$homeController->index();

