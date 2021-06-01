<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/DB.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Entity/user.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Manager/UserManager.php';

if(isset($_POST['userName'])) {
    $manager = new UserManager();
    $user = $manager->getUserByName($_POST['userName']);
    $user->setRole(1);
    $manager->editUser($user);
}

header('Location:/index.php?ctrl=admin&action=addAdmin');