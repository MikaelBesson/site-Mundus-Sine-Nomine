<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/DB.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Entity/infoServ.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Manager/infoServManager.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Entity/game.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Manager/GameManager.php';

session_start();

if(isset($_POST['servName'],$_POST['ipAdress'],$_POST['servPass'],$_POST['gameName'])) {
    $server =new infoServManager();
    $_SESSION["message"] = $server->addInfoServ($_POST['servName'],$_POST['ipAdress'],$_POST['servPass'],intval($_POST['gameName']));
}

header('Location:/index.php?ctrl=admin&action=addServeur');