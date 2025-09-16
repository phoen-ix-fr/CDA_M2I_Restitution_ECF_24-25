<?php
use M2i\Ecf\Controller\ErrorController;
use Dotenv\Dotenv;

// Constante qui contient le chemin de la racine du projet
define('APP_ROOT', dirname(__DIR__));

// Chargement de l'autoloader de Composer
require_once "../vendor/autoload.php";

session_start();

/*
// require_once "../app/Controller/HomeController.php";
use M2i\Ecf\Controller\HomeController;

$objController = new HomeController();
$objController->index();
*/

// On charge le(s) fichier(s) d'environnement .env
$dotenv = Dotenv::createImmutable(APP_ROOT);
$dotenv->load();

$strController  = ucfirst($_GET['controller']??'home');
$strAction      = strtolower($_GET['action']??'index');

// Construction du nom du contrôleur : Mi2\Ecf\Controller\HomeController
$strControllerClass = "M2i\\Ecf\\Controller\\" . $strController . 'Controller';

if(class_exists($strControllerClass)) {

    if(method_exists($strControllerClass, $strAction)) {

        $objController = new $strControllerClass();
        $objController->$strAction();

        exit; // Fin
    }
}

$errorController = new ErrorController();
$errorController->httpNotFound();