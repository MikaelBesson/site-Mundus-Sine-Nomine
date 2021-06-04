<?php
session_start();

require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/DB.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Entity/Game.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Manager/GameManager.php';

if(isset($_POST['delName'])){
    $gameManager = new GameManager();
    $game = $gameManager->getGame($_POST['delName']);
    if($game !== null){
        $id = $game->getId();
        $_SESSION['message'] = $gameManager->deleteGame($id);
    }
    else {
        $_SESSION['message'] = "le jeux n'existe pas";
    }
}

header('Location:/index.php?ctrl=admin&action=deleteGame');