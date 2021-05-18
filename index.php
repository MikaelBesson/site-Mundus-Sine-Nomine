<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/DB.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Classes/Controller.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Controller/HomeController.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Controller/InscriptionController.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Controller/Entity/game.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Controller/Entity/infogame.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Controller/Manager/GameManager.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Controller/Manager/infoGameManager.php';

require_once $_SERVER['DOCUMENT_ROOT'] . '/Controller/Entity/user.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Controller/Manager/UserManager.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Classes/cleanInput.php';




if(isset($_GET['ctrl'])) {
    switch($_GET['ctrl']) {
        case 'formulaire':
            (new InscriptionController())->displayFormulaire();
            break;
        case 'acceuil':
            (new HomeController())->displayHome();
            break;
    }
}
else {
    (new HomeController())->displayHome();
}


