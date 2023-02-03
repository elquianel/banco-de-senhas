<?php
require("config.php");
require("routes/getAll.php");

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Teste</title>
</head>
<body>
    <?php require("templates/header.php");?>
<div class="container">
<?php if($array): ?>
<?php foreach($array['result'] as $pass): ?>
    <h1><?= $pass['plataform']; ?></h1>
    <h4><?= $pass['email']; ?></h4>
<?php endforeach; ?>
<a href="pages/createPass.php">Adicionar senha</a>
<?php else: ?>
    <h1>Sem dados ainda</h1>
    <a href="pages/createPass.php">Adicionar senha</a>
<?php endif; ?>
</div>
</body>
</html>

