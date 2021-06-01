<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/DB.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Entity/game.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Manager/GameManager.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Entity/infogame.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Manager/infoGameManager.php';
session_start();

if(isset($_POST['gameName'],$_POST['devName'], $_POST['genreName'],$_POST['content'])) {
    $manager = new GameManager();
    $_SESSION["message"] = $manager->addGame($_POST['gameName'], $_POST['devName'],  $_POST['genreName'],$_POST['content']);
}

header('Location:/index.php?ctrl=admin&action=addGame');