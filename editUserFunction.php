<?php

session_start();

require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/DB.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Entity/User.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Manager/UserManager.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Manager/RoleManager.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Model/Entity/Role.php';

if(isset($_POST['editUser'])) {
    $manager = new UserManager();
    $roleManager = new RoleManager();
    $user = $manager->getUserByName($_POST['editUser']);
    $role = $roleManager->getRole(intval($_POST['roleUser']));
    $user->setRole($role->getId());
    $_SESSION['message'] = $manager->editUser($user);
}

header('Location:/index.php?ctrl=admin&action=editUser');

