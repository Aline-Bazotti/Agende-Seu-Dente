<?php
$institucionais = $metodo->buscarTodosInstitucional();

?>
<header>
    <div class="row">
        <div class="col-sm-6">
            <h2>Institucional</h2>
        </div>
        <div class="col-sm-6 text-center h2">
            <a class="btn btn-info" href="?page=institucionalList"><i class="fa fa-hourglass"></i> Atualizar</a>
            <a class="btn btn-success" href="?page=institucionalCadastro"><i class="fa fa-sticky-note"></i>Cadastrar</a>
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
    <?php foreach($institucionais as $institucional): ?>
        <tr>
            <td><?= $institucional['descricao']; ?></td>
            <td><?= $institucional['texto']; ?></td>
            <?php
            if ($institucional['status'] == 1){
                ?><td>
                <form action="../admin/Institucional/Controller/editInstitucional.php" method="post">
                    <input id="edit_status" name="edit_status" hidden="hidden" value="<?= $institucional['id']; ?>">
                    <button type="submit" class="btn btn-success">Ativo</button>
                </form>
                </td><?php
            } else{
                ?><td>
                <form action="../admin/Institucional/Controller/editInstitucional.php" method="post">
                    <input id="edit_status" name="edit_status" hidden="hidden" value="<?= $institucional['id']; ?>">
                    <button type="submit" class="btn btn-dark">Inativo</button>
                </form>
                </td><?php
            } ?>
            <?php
            if ($institucional['inicial'] == 1){
                ?><td>
                <form action="../admin/Institucional/Controller/editInstitucional.php" method="post">
                    <input id="edit_inicial" name="edit_inicial" hidden="hidden" value="<?= $institucional['id']; ?>">
                    <button type="submit" class="btn btn-success">Sim</button>
                </form>
                </td><?php
            } else{
                ?><td>
                <form action="../admin/Institucional/Controller/editInstitucional.php" method="post">
                    <input id="edit_inicial" name="edit_inicial" hidden="hidden" value="<?= $institucional['id']; ?>">
                    <button type="submit" class="btn btn-dark">Não</button>
                </form>
                </td><?php
            } ?>
            <td class="actions text-left">
                <a class="btn btn-sm btn-warning" href="?page=institucionalForm&institucionalId=<?= $institucional['id']; ?>">
                    <i class="fa fa-edit"></i>Editar</a>
                <a class="btn btn-sm btn-danger" href="../admin/Institucional/Controller/delInstitucional.php?institucionalId=<?= $institucional['id']; ?>">
                    <i class="fa fa-trash"></i> Excluir</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>