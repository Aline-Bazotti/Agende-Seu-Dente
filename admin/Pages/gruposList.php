<?php

$dados = $metodo->buscarGrupos();
$grupo_id = isset($_POST['grupoId']) ? $_POST['grupoId'] : null;
$grupo = $metodo->buscarGrupoPorId($grupo_id);

?>
<header>
    <div class="row">
        <div class="col-sm-6">
            <h2>Grupos</h2>
        </div>
        <div class="col-sm-6 text-center h2">
            <a class="btn btn-info" href="?page=gruposList"><i class="fa fa-hourglass"></i> Atualizar</a>
            <a class="btn btn-success" href="?page=grupoCadastro" title="Cadastrar"><i class="fa fa-sticky-note"></i>Cadastrar</a>
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
                    <a class="btn btn-sm btn-warning" href="?page=grupoForm&grupoId=<?= $grupo['id']; ?>">
                        <i class="fa fa-edit"></i>Editar</a>
                    <a class="btn btn-sm btn-danger" href="../admin/Grupos/Controller/delGrupo.php?grupoId=<?= $grupo['id']; ?>">
                        <i class="fa fa-trash"></i> Excluir</a>
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