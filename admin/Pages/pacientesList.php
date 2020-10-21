<?php
$dados = $metodo->buscarTodosPacientes();

?>

<header>
    <div class="row">
        <div class="col-sm-6">
            <h2>Pacientes</h2>
        </div>
        <div class="col-sm-6 text-center h2">
            <a class="btn btn-info" href="?page=pacientesList"><i class="fa fa-hourglass"></i> Atualizar</a>
            <a class="btn btn-success" href="?page=pacienteCadastro"><i class="fa fa-sticky-note"></i>Cadastrar</a>
        </div>
    </div>
</header>
<hr>
<table class="table table-hover">
    <thead>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Telefone</th>
        <th>Ação</th>
    </tr>
    </thead>
    <tbody>
    <?php
    if ($dados) {
        foreach($dados as $paciente):
            ?>
            <tr>
                <td><?= $paciente['id']; ?></td>
                <td><?= $paciente['nome']; ?></td>
                <td><?= $paciente['email']; ?></td>
                <td><?= $paciente['telefone']; ?></td>

                <td class="actions text-left">
                    <a class="btn btn-sm btn-warning" href="?page=pacienteForm&pacienteId=<?= $paciente['id']; ?>">
                        <i class="fa fa-edit"></i>Editar</a>
                    <a class="btn btn-sm btn-danger" href="../admin/Paciente/Controller/delPaciente.php?pacienteId=<?= $paciente['id']; ?>">
                        <i class="fa fa-trash"></i> Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php } else { ?>
        <tr>
            <td colspan="6">Nenhum paciente cadastrado.</td>
        </tr>
    <?php } ?>
    </tbody>
</table>