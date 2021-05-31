<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/DB.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Classes/Controller.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Controller/HomeController.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Controller/InscriptionController.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Entity/game.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Entity/infogame.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Manager/GameManager.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Manager/infoGameManager.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Controller/AdminController.php';

require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Entity/user.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Manager/UserManager.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Classes/cleanInput.php';


if (isset($_GET['ctrl'])) {
    switch ($_GET['ctrl']) {
        case 'formulaire':
            (new InscriptionController())->displayFormulaire();
            break;
        case 'acceuil':
            (new HomeController())->displayHome();
            break;
        case 'admin':
            $controller = new AdminController();
            switch ($_GET['action']) {
                case 'admin':
                   $controller->displayAdmin();
                    break;
                case 'addAdmin':
                   $controller->displayAddAdmin();
                    break;
                case 'addGame':
                    $controller->displayAddGame();
                    break;
                case 'addServeur':
                    $controller->displayAddServeur();
                    break;
                case 'editAdmin':
                    $controller->displayEditAdmin();
                    break;
                case 'editGame':
                    $controller->displayEditGame();
                    break;
                case 'editServeur':
                    $controller->displayEditServeur();
                    break;
                case 'deleteUser':
                    $controller->displayDeleteUser();
                    break;
                case 'deleteGame':
                    $controller->displayDeleteGame();
                    break;
                case 'deleteServeur':
                    $controller->displayDeleteServeur();
                    break;
            }
            break;
    }
} else {
    (new HomeController())->displayHome();
}






