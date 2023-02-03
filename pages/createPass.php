<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>criar nota</title>
</head>
<body>
    <form action="../routes/create.php" method="POST">
        <label for="plataform">Plataforma</label><br>
        <input type="text" name="plataform"><br>
        <label for="email">Email</label><br>
        <input type="email" name="email"><br>
        <label for="login">Login</label><br>
        <input type="login" name="login"><br>
        <label for="password">Senha</label><br>
        <input type="password" name="password"><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>