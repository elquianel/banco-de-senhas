<?php 

require '../../vendor/autoload.php';

define("TITLE", 'Nova senha');

use App\Models\Password;

$obPass = new Password();
// validação post
if(isset($_POST['plataform'], $_POST['email'], $_POST['password'])){
    $obPass->plataform = $_POST['plataform'];
    $obPass->email = $_POST['email'];
    $obPass->login = $_POST['login'];
    $obPass->password = $_POST['password'];

    $obPass->register();
    header("Location: index.php?status=success");exit;
}

include '../../includes/header.php';
include '../../includes/formPass.php';
include '../../includes/footer.php';
