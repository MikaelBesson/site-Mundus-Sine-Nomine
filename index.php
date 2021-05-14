<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/DB.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Classes/Controller.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Controller/HomeController.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Controller/InscriptionController.php';

require_once $_SERVER['DOCUMENT_ROOT'] . '/Controller/Entity/user.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Controller/Manager/UserManager.php';




if(isset($_GET['ctrl'])) {
    switch($_GET['ctrl']) {
        case 'formulaire':
            (new InscriptionController())->displayFormulaire();
            break;
    }
}
else {
    (new HomeController())->displayHome();
}

