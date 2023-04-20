<?php
require __DIR__.'./vendor/autoload.php';

use \App\Models\User;
use \App\Models\Password;

$users = new User();
$pass = new Password();
// $pass->register();
// $list = $users->getUsers();
$passwords = $pass->getPassDecrypt(1);

echo "<pre>";var_dump($passwords);exit;

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/show.php';
include __DIR__.'/includes/footer.php';

