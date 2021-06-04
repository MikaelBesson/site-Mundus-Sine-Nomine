<?php

session_start();

require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/DB.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Entity/User.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Manager/UserManager.php';

if(isset($_POST['email'], $_POST['pass'])) {
    $userManager = new UserManager();
    $user = $userManager->checkLog($_POST['email'], $_POST['pass']);
    if($user !== null){
        $_SESSION['user'] = $user;
        $_SESSION['connect'] = true;
        header('Location: /index.php?ctrl=acceuil');
    }
    else {
        $_SESSION['connect'] = false;
        header ('Location: /index.php?ctrl=formulaire');
    }
}
else {
    $_SESSION['connect'] = false;
    header ('Location: /index.php?ctrl=formulaire');
}


