<?php 

require("../config.php");

$method = strtolower($_SERVER['REQUEST_METHOD']);

if($method === 'delete'){
	
	parse_str(file_get_contents('php://input'), $input);

	$id = filter_var($input['id'] ?? null);

	if($id){
		$sql = $pdo->prepare("SELECT * FROM passwords WHERE id = :id");
		$sql->bindValue(":id", $id);
		$sql->execute();

		if($sql->rowCount() > 0){
			$sql = $pdo->prepare("DELETE FROM passwords WHERE id = :id");
			$sql->bindValue(":id", $id);
			$sql->execute();
			
		}else{
			$array['error'] = "Id inexistente";
		}

	}else{
		$array['error'] = 'Id não enviado';
	}
}else{
	$array['error'] = 'Metódo não permitido';
}

header("Location: ./getAll.php");