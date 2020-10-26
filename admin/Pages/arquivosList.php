<?php
$dados = $metodo->buscarTodosArquivos();


?>

<header>
    <div class="row">
        <div class="col-sm-6">
            <h2>Arquivos</h2>
        </div>
        <div class="col-sm-6 text-center h2">
            <a class="btn btn-info" href="?page=arquivosList"><i class="fa fa-hourglass"></i> Atualizar</a>
            <a class="btn btn-success" href="?page=arquivoCadastro"><i class="fa fa-sticky-note"></i>Cadastrar</a>
        </div>
    </div>
</header>
<hr>
<table class="table table-hover">
    <thead>
    <tr>
        <th width="40%">Nome</th>
        <th>Paciente</th>
        <th>Ação</th>
    </tr>
    </thead>
    <tbody>
    <?php
    if ($dados) {
        foreach($dados as $arquivo):
            $paciente = $metodo->buscarPacientePorId($arquivo['id_paciente'])
            ?>
            <tr>
                <td><?= $arquivo['nome']; ?></td>
                <td><?= $paciente['nome']; ?></td>

                <td class="actions text-left">
                    <a class="btn btn-sm btn-danger" href="../admin/Arquivos/Controller/delArquivo.php?id=<?= $arquivo['id']; ?>">
                        <i class="fa fa-trash"></i> Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php } else { ?>
        <tr>
            <td colspan="6">Nenhum arquivo cadastrado.</td>
        </tr>
    <?php } ?>
    </tbody>
</table>