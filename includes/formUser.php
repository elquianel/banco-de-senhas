<main>
    <section>
        <a href="index.php">
            <button class="btn btn-success">Voltar</button>
        </a>
    </section>

    <h2 class="mt-3"><?= TITLE; ?></h2>

    <form method="post">
        <div class="form-group">
            <label for="">Nome</label>
            <input type="text" name="name" class="form-control" value="<?= ($obUser->name); ?>">
        </div>

        <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control" value="<?= ($obUser->email); ?>">
        </div>

        <div class="form-group">
            <label for="">Senha</label>
            <input type="password" name="password" class="form-control" value="<?= ($obUser->password); ?>">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>
    </form>
</main>