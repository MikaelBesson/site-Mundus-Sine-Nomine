<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/DB.php';

require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Entity/User.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Entity/Role.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Entity/Game.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Entity/Infogame.php';

require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Manager/GameManager.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Manager/InfoGameManager.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Manager/RoleManager.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Manager/UserManager.php';

require_once $_SERVER['DOCUMENT_ROOT'] . '/Classes/Controller.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Controller/HomeController.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Controller/InscriptionController.php';

require_once $_SERVER['DOCUMENT_ROOT'] . '/Controller/AdminController.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Classes/cleanInput.php';

session_start();


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
                case 'addGame':
                    $controller->displayAddGame();
                    break;
                case 'addServeur':
                    $controller->displayAddServeur();
                    break;
                case 'editUser':
                    $controller->displayEditUser();
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






