<?php
require "../../Util/Metodo.php";
$metodo = new Metodo();
$dados = $metodo->buscarGrupos();
include "../menuLateral.php";
?>

<header>
    <div class="row">
        <div class="col-sm-6">
            <h2>Grupos</h2>
        </div>
        <div class="col-sm-6 text-center h2">
            <a class="btn btn-info" href="gruposList.php"><i class="fa fa-hourglass"></i> Atualizar</a>
            <a class="btn btn-success" href="grupoCadastro.php"><i class="fa fa-sticky-note"></i>Cadastrar</a>
        </div>
    </div>
</header>
<hr>
<table class="table table-hover">
    <thead>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Ações</th>
    </tr>
    </thead>
    <tbody>
    <?php
    if ($dados) {
        foreach($dados as $grupo):
            ?>
            <tr>
                <td><?= $grupo['id']; ?></td>
                <td><?= $grupo['nome']; ?></td>
                <td class="actions text-left">
                    <form method="post" action="grupoForm.php">
                        <input type="hidden" name="grupoId" id="grupoId" value="<?= $grupo['id']; ?>">
                        <button class="btn btn-sm btn-warning">
                            <i class="fa fa-edit"></i> Editar
                        </button>
                    </form>
                    <form method="post" action="Controller/delGrupo.php">
                        <input type="hidden" name="grupoId" id="grupoId" value="<?= $grupo['id']; ?>">
                        <button class="btn btn-sm btn-danger">
                            <i class="fa fa-trash"></i> Excluir
                        </button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php } else { ?>
        <tr>
            <td colspan="6">Nenhum grupo cadastrado.</td>
        </tr>
    <?php } ?>
    </tbody>
</table>