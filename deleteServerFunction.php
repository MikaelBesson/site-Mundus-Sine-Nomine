<?php
session_start();

require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/DB.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Entity/InfoServ.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Manager/InfoServManager.php';

if(isset($_POST['delServ'])){
    $servManager = new infoServManager();
    $serv = $servManager->getServ($_POST['delServ']);
    if($serv !== null) {
        $id = $serv->getId();
        $_SESSION['message'] = $servManager->deleteInfoServ($id);
    }
    else {
        $_SESSION['message'] = "le serveur n'existe pas ";
    }
}

header('Location:/index.php?ctrl=admin&action=deleteServeur');