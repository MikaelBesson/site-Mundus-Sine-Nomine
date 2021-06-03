<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/DB.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Entity/User.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Manager/UserManager.php';

session_start();


if(isset($_POST['delUser'])) {
    $userManager = new UserManager();
    $userManager->getUserByName($_POST['delUser']);
    $userManager->deletteUser($_POST['delUser']);
}

header('Location:/index.php?ctrl=admin&action=deleteUser');