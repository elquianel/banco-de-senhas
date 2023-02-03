<?php 

require("../config.php");

$method = strtolower($_SERVER['REQUEST_METHOD']);

if($method === 'post'){
	$plataform = filter_input(INPUT_POST, 'plataform');
	$email = filter_input(INPUT_POST, 'email');
	$login = filter_input(INPUT_POST, 'login');
	$password = filter_input(INPUT_POST, 'password');

	if($plataform && $email && $login && $password){
		$sql = $pdo->prepare("INSERT INTO passwords (id_user, plataform, email, login, password) VALUES (1, :plataform, :email, :login, :password)");
		$sql->bindValue(":plataform", $plataform);
		$sql->bindValue(":email", $email);
		$sql->bindValue(":login", $login);
		$sql->bindValue(":password", $password);
		$sql->execute();

		$id = $pdo->lastInsertId();

		$array['result'] = [
			'id' => $id,
			'plataform' => $plataform,
			'email' => $email,
			'login' => $login,
			'password' => $password
		];
	}else{
		$array['error'] = 'Campos não enviados';
	}
}else{
	$array['error'] = 'Metódo não permitido';
}

header("Location: ./getAll.php");