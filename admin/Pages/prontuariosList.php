<?php
$dados = $metodo->buscarProntuarios();


?>

<header>
    <div class="row">
        <div class="col-sm-6">
            <h2>Prontuário</h2>
        </div>
        <div class="col-sm-6 text-center h2">
            <a class="btn btn-info" href="?page=prontuariosList"><i class="fa fa-hourglass"></i> Atualizar</a>
            <a class="btn btn-success" href="?page=prontuarioCadastro"><i class="fa fa-sticky-note"></i>Cadastrar</a>
        </div>
    </div>
</header>
<hr>
<table class="table table-hover">
    <thead>
    <tr>
        <th>ID</th>
        <th>Paciente</th>
        <th>Ação</th>
    </tr>
    </thead>
    <tbody>
    <?php
    if ($dados) {
        foreach($dados as $prontuario):
            $paciente = $metodo->buscarPacientePorId($prontuario['id_paciente']);
            ?>
            <tr>
                <td><?= $prontuario['id']; ?></td>
                <td><?= $paciente['nome']; ?></td>

                <td class="actions text-left">
                    <a class="btn btn-sm btn-info" href="?page=prontuarioHistoricoCadastro&prontuarioId=<?= $prontuario['id']; ?>">
                        <i class="fa fa-list"></i>Adicionar Histórico</a>
                    <a class="btn btn-sm btn-success" href="?page=viewProntuario&pacienteId=<?= $prontuario['id_paciente']; ?>">
                        <i class="fa fa-eye"></i>Ver</a>
                    <a class="btn btn-sm btn-warning" href="?page=prontuarioForm&prontuarioId=<?= $prontuario['id']; ?>">
                        <i class="fa fa-edit"></i>Editar</a>
                    <a class="btn btn-sm btn-danger" href="../admin/Prontuario/Controller/delProntuario.php?prontuarioId=<?= $prontuario['id']; ?>">
                        <i class="fa fa-trash"></i> Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php } else { ?>
        <tr>
            <td colspan="6">Nenhum prontuário cadastrado.</td>
        </tr>
    <?php } ?>
    </tbody>
</table>