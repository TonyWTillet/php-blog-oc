<?php
ini_set('display_errors', 1);
error_reporting(E_ERROR | E_WARNING);

$siteName= "Blog";
$abspath = $_SERVER['DOCUMENT_ROOT'] . '/';

$http = 'https://php-blog-oc.test/';

define('SITE', $siteName);
define('ABSPATH', $abspath);
define('HTTP', $http);

define('VENDOR_FOLDER', ABSPATH . '../vendor/autoload.php');
define('IMG_FOLDER', ABSPATH . 'uploads/images/');
define('DOC_FOLDER', ABSPATH . 'uploads/documents/');
define('PANEL', HTTP . 'panel/');
define('SRC', ABSPATH . '../src/');
define('UPLOAD', HTTP . '../uploads/');
define('DOC_URL', HTTP . '../upload/documents/');
define('IMG_URL', HTTP . '../uploads/images/');
define('EXPORT', ABSPATH . '../uploads/exports/');

define('VIEW_ASSETS', ABSPATH . '/assets/');
define('BACK_VIEW', ABSPATH .'views/back/');
define('FRONT_VIEW', ABSPATH .'views/front/');
define('ASSETS_FRONT', HTTP .'assets/front/');
define('ASSETS_BACK', HTTP . 'assets/back/');
define('VIEW', ABSPATH .'/views/');
define('BACK_CONTROLLER', '../src/Controller/Back/');
