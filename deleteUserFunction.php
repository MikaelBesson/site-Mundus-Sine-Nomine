<?php
session_start();

require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/DB.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Entity/User.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Manager/UserManager.php';



if(isset($_POST['delUser'])) {
    $userManager = new UserManager();
    $user = $userManager->getUserByName($_POST['delUser']);
    if($user !== null){
        $id = $user->getId();
        $_SESSION['message'] = $userManager->deleteUser($id);
    }
    else {
        $_SESSION['message'] = "l'utilisateur n'existe pas";
    }
}

header('Location:/index.php?ctrl=admin&action=deleteUser');