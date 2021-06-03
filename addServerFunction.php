<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/DB.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Entity/InfoServ.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Manager/InfoServManager.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Entity/Game.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Manager/GameManager.php';

session_start();

if(isset($_POST['servName'],$_POST['IpAdress'],$_POST['servPass'],$_POST['gameName'])) {
    $server = new infoServManager();

    $_SESSION["message"] = $server->addInfoServ($_POST['servName'],$_POST['IpAdress'],$_POST['servPass'],intval($_POST['gameName']));
}

header('Location:/index.php?ctrl=admin&action=addServeur');