<?php 

$method = strtolower($_SERVER['REQUEST_METHOD']);

if($method === 'get'){
	$sql = $pdo->query("SELECT * FROM passwords");
	if($sql->rowCount() > 0){
		$data = $sql->fetchAll(PDO::FETCH_ASSOC);

		foreach($data as $item){
			$array['result'][] = [
				'id' => $item['id'],
				'plataform' => $item['plataform'],
				'email' => $item['email'],
				'login' => $item['login'],
				'password' => $item['password'],
				'created_at' => $item['created_at']
			];
		}
	}
}else{
	$array['error'] = 'Metódo não permitido';
}