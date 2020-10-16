<?php
$servicos = $metodo->buscarTodosServicos();

?>
<header>
    <div class="row">
        <div class="col-sm-6">
            <h2>Serviços</h2>
        </div>
        <div class="col-sm-6 text-center h2">
            <a class="btn btn-info" href="?page=servicosList"><i class="fa fa-hourglass"></i> Atualizar</a>
            <a class="btn btn-success" href="?page=servicoCadastro"><i class="fa fa-sticky-note"></i>Cadastrar</a>
        </div>
    </div>
</header>
<hr>
<table class="table table-hover">
    <thead>
    <tr>
        <th width="20%">Título</th>
        <th width="45%">Descrição</th>
        <th width="10%">Status</th>
        <th width="10%">Inicial</th>
        <th width="15%">Ação</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($servicos as $servico): ?>
        <tr>
            <td><?= $servico['descricao']; ?></td>
            <td><?= $servico['texto']; ?></td>
            <?php
            if ($servico['status'] == 1){
                ?><td>
                <form action="../admin/Servicos/Controller/editServico.php" method="post">
                    <input id="edit_status" name="edit_status" hidden="hidden" value="<?= $servico['id']; ?>">
                    <button type="submit" class="btn btn-success">Ativo</button>
                </form>
                </td><?php
            } else{
                ?><td>
                <form action="../admin/Servicos/Controller/editServico.php" method="post">
                    <input id="edit_status" name="edit_status" hidden="hidden" value="<?= $servico['id']; ?>">
                    <button type="submit" class="btn btn-dark">Inativo</button>
                </form>
                </td><?php
            } ?>
            <?php
            if ($servico['inicial'] == 1){
                ?><td>
                <form action="../admin/Servicos/Controller/editServico.php" method="post">
                    <input id="edit_inicial" name="edit_inicial" hidden="hidden" value="<?= $servico['id']; ?>">
                    <button type="submit" class="btn btn-success">Sim</button>
                </form>
                </td><?php
            } else{
                ?><td>
                <form action="../admin/Servicos/Controller/editServico.php" method="post">
                    <input id="edit_inicial" name="edit_inicial" hidden="hidden" value="<?= $servico['id']; ?>">
                    <button type="submit" class="btn btn-dark">Não</button>
                </form>
                </td><?php
            } ?>
            <td class="actions text-left">
                <a class="btn btn-sm btn-warning" href="?page=servicoForm&servicoId=<?= $servico['id']; ?>">
                    <i class="fa fa-edit"></i>Editar</a>
                <a class="btn btn-sm btn-danger" href="../admin/Servicos/Controller/delServico.php?servicoId=<?= $servico['id']; ?>">
                    <i class="fa fa-trash"></i> Excluir</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>