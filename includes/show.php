<?php
    $msg = '';
    if(isset($_GET['status'])){
        switch ($_GET['status']) {
            case 'success':
                $msg = '<div class="alert alert-success">Ação executada com sucesso!!</div>';
                break;
            case 'error':
                $msg = '<div class="alert alert-danger">Ocorreu algum problema durante a execução!</div>';
                break;
        }
    }
?>

<main>
    <section>
        <?= $msg; ?>
        <a href="./pages/passwords/register.php">
            <button class="btn btn-success">Nova senha</button>
        </a>
    </section>

    <section>
        <table class="table bg-light mt-3">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Plataforma</th>
                    <th>Email</th>
                    <th>Login</th>
                    <th>Senha</th>
                    <th>Data</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php if($passwords): ?>
                    <?php foreach($passwords as $pass): ?>
                    <tr>
                        <td><?= $pass->id; ?></td>
                        <td><?= $pass->plataform; ?></td>
                        <td><?= $pass->email; ?></td>
                        <td><?= $pass->login; ?></td>
                        <td><?= $passDecrypt; ?></td>
                        <td><?= $pass->created_at; ?></td>
                        <td>
                            <a href="./pages/passwords/edit.php?id=<?= $pass->id;?>" >
                                <button class="btn btn-warning">Editar</button>
                            </a>
                            <a href="./pages/passwords/delete.php?id=<?= $pass->id; ?>">
                                <button class="btn btn-danger">Excluir</button>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <?php else: ?>
                    <strong>Nenhuma senha ainda cadastrada!! <a href="../pages/passwords/register.php">Clique aqui para inserir uma.</a></strong>
                <?php endif; ?>
            </tbody>
        </table>
    </section>
</main>