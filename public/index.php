<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use App\Controller\HomeController;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'../');
$dotenv->load();

$homeController = new HomeController();

$homeController->index();

