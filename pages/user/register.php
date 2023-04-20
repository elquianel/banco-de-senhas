<?php

require '../../vendor/autoload.php';

define("TITLE", 'Novo usuário');

use App\Models\User;

$obUser = new User();

if(isset($_POST['name'], $_POST['email'], $_POST['password'])){
    $obUser->name = $_POST['name'];
    $obUser->email = $_POST['email'];
    $obUser->password = $_POST['password'];

    $obUser->register();
    header("Location: index.php?status=success");exit;
}

include '../../includes/header.php';
include '../../includes/formUser.php';
include '../../includes/footer.php';