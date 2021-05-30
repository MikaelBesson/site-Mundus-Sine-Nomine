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
require_once $_SERVER['DOCUMENT_ROOT'] . '/Controller/AddGameController.php';


require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Entity/user.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Manager/UserManager.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Classes/cleanInput.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Controller/GameController.php';




if(isset($_GET['ctrl'])) {
    switch($_GET['ctrl']) {
        case 'formulaire':
            (new InscriptionController())->displayFormulaire();
            break;
        case 'acceuil':
            (new HomeController())->displayHome();
            break;
        case 'admin':
            switch($_GET['action']) {
                case 'admin':
                    (new AdminController())->displayAdmin();
                    break;
                case 'addGame':
                    (new AddGameController())->displayAddGame();
                    break;
            }
            break;
        }
    }
    else {
   (new HomeController())->displayHome();
}






