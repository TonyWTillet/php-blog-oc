<?php
session_start();
error_reporting(0);
require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use App\Service\RoutingService;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'../../');
$dotenv->load();

RoutingService::route();
