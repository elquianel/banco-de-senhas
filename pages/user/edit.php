<?php

require __DIR__.'./vendor/autoload.php';

define("TITLE", 'Editar usuário');

use App\Models\User;

if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('Location: index.php?status=error');exit;
}

$obUser = new User();
$obVaga->getUser($_GET['id']);
if(!$obUser instanceof User){
    header('Location: index.php?status=error');exit;
}

if(isset($_POST['name'], $_POST['email'], $_POST['password'])){
    $obUser->name = $_POST['name'];
    $obUser->email = $_POST['email'];
    $obUser->password = $_POST['password'];
    // echo "<pre>";var_dump($obUser);
    $obUser->edit();
    header("Location: index.php?status=success");exit;
}

include '../../includes/header.php';
include '../../includes/formUser.php';
include '../../includes/footer.php';

