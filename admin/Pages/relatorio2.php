<?php
$dados = $metodo->relatorio2();


?>

<header>
    <div class="row">
        <div class="col-sm-6">
            <h2>Horários a Marcar</h2>
        </div>
        <div class="col-sm-6 text-center h2">
            <a class="btn btn-info" href="?page=relatorio2"><i class="fa fa-hourglass"></i> Atualizar</a>
        </div>
    </div>
</header>
<hr>
<table class="table table-hover">
    <thead>
    <tr>
        <th>ID</th>
        <th>Paciente</th>
        <th>CPF</th>
        <th>Descrição</th>
        <th>Data Nascimento</th>
        <th>Telefone</th>
    </tr>
    </thead>
    <tbody>
    <?php
    if ($dados) {
        foreach($dados as $dado):?>
            <tr>
                <td><?= $dado['id']; ?></td>
                <td><?= $dado['nome']; ?></td>
                <td><?= $dado['cpf_cnpj']; ?></td>
                <td><?= $dado['descricao']; ?></td>
                <td><?= $dado['data_nascimento']; ?></td>
                <td><?= $dado['telefone']; ?></td>
            </tr>
        <?php endforeach; ?>
    <?php } else { ?>
        <tr>
            <td colspan="6">Nenhum resultado para o relatório.</td>
        </tr>
    <?php } ?>
    </tbody>
</table>