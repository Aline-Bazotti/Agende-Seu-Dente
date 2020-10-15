<?php
$dados = $metodo->buscarProcedimentos();

?>

<header>
    <div class="row">
        <div class="col-sm-6">
            <h2>Procedimentos</h2>
        </div>
        <div class="col-sm-6 text-center h2">
            <a class="btn btn-info" href="?page=procedimentosList"><i class="fa fa-hourglass"></i> Atualizar</a>
            <a class="btn btn-success" href="?page=procedimentoCadastro"><i class="fa fa-sticky-note"></i>Cadastrar</a>
        </div>
    </div>
</header>
<hr>
<table class="table table-hover">
    <thead>
    <tr>
        <th>ID</th>
        <th>Descrição</th>
        <th>Duração Média</th>
        <th>Ação</th>
    </tr>
    </thead>
    <tbody>
    <?php
    if ($dados) {
        foreach($dados as $procedimento):
            ?>
            <tr>
                <td><?= $procedimento['id']; ?></td>
                <td><?= $procedimento['descricao']; ?></td>
                <td><?= $procedimento['duracao_media']; ?></td>

                <td class="actions text-left">
                    <a class="btn btn-sm btn-warning" href="?page=procedimentoForm&procedimentoId=<?= $procedimento['id']; ?>">
                        <i class="fa fa-edit"></i>Editar</a>
                    <a class="btn btn-sm btn-danger" href="../admin/Procedimento/Controller/delProcedimento.php?procedimentoId=<?= $procedimento['id']; ?>">
                        <i class="fa fa-trash"></i> Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php } else { ?>
        <tr>
            <td colspan="6">Nenhum usuário cadastrado.</td>
        </tr>
    <?php } ?>
    </tbody>
</table>