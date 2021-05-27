<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/DB.php';

if(isset($_GET["title"]) && !empty($_GET["title"])){
    if(isset($_GET["action"])){
        if($_GET["action"] === "serv"){
            infosServ($_GET["title"]);
        }
    }
    else{
        infos($_GET["title"]);
    }
}
else{
    header("Location: /index.php");
}


function infos($name){
    $conn = new DB();
    $result = $conn->connect()->prepare("SELECT * FROM infogame INNER JOIN game on infogame.id = game.infogame_fk WHERE game.name = :name");
    $result->bindValue(':name', $name);
    $result->execute();
    $message = $result->fetchAll();
    echo json_encode($message);
}

function infosServ($name){
    $conn = new DB();
    $result = $conn->connect()->prepare("SELECT * FROM infoserv INNER JOIN game on game.id = infoserv.infogame_fk WHERE game.name = :name");
    $result->bindValue(':name', $name);
    $result->execute();
    $message2 = $result->fetchAll();
    echo json_encode($message2);
}