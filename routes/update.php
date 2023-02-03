<?php 

require("../config.php");

$method = strtolower($_SERVER['REQUEST_METHOD']);

if($method === 'put'){
	
	parse_str(file_get_contents('php://input'), $input);

	// $id = (!empty($input['id'])) ? $input['id'] : null; //caso abaixo nao funcione, usa assim
	$id = filter_var($input['id'] ?? null); //essa forma assim só funciona do php 7.4 pra lá 
	$plataform = filter_var($input['plataform'] ?? null);
	$email = filter_var($input['email'] ?? null);
	$login = filter_var($input['login'] ?? null);
	$password = filter_var($input['password'] ?? null);

	if($id && $plataform && $email){
		$sql = $pdo->prepare("SELECT * FROM passwords WHERE id = :id");
		$sql->bindValue(":id", $id);
		$sql->execute();

		if($sql->rowCount() > 0){
			$sql = $pdo->prepare("UPDATE passwords SET plataform = :plataform, email = :email, login = :login, password = :password WHERE id = :id");
			$sql->bindValue(":id", $id);
			$sql->bindValue(":plataform", $plataform);
			$sql->bindValue(":email", $email);
			$sql->bindValue(":login", $login);
			$sql->bindValue(":password", $password);
			$sql->execute();

			$array['result'] = [
				'id' => $id,
				'plataform' => $plataform,
				'email' => $email,
				'login' => $login,
				'password' => $password,
			];
		}else{
			$array['error'] = "Id inexistente";
		}

	}else{
		$array['error'] = 'Campos não enviados';
	}
}else{
	$array['error'] = 'Metódo não permitido';
}


header("Location: ./getAll.php");