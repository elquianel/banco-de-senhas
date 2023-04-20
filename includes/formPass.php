<main>
    <section>
        <a href="index.php">
            <button class="btn btn-success">Voltar</button>
        </a>
    </section>

    <h2 class="mt-3"><?= TITLE; ?></h2>

    <form method="post">
        <div class="form-group">
            <label for="">Plataforma</label>
            <input type="text" name="plataform" class="form-control" value="<?= ($obPass->plataform); ?>">
        </div>

        <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control" value="<?= ($obPass->email); ?>">
        </div>

        <div class="form-group">
            <label for="">Login</label>
            <input type="text" name="login" class="form-control" value="<?= ($obPass->login); ?>">
        </div>

        <div class="form-group">
            <label for="">Senha</label>
            <input type="password" name="password" class="form-control" value="<?= ($obPass->password); ?>">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>
    </form>
</main>