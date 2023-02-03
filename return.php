<?php 

header("Access-Control-Allow-Origin: *"); //permitindo acessar mesmo com http
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS"); //permitindo metodos (já que o navegador só identifica GET e POST)
header("Content-Type: application/json");

echo json_encode($array);exit;
