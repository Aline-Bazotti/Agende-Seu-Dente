<?php
$dados = $metodo->buscarTodosBanners();
?>

<header>
    <div class="row">
        <div class="col-sm-6">
            <h2>Banners</h2>
        </div>
        <div class="col-sm-6 text-center h2">
            <a class="btn btn-info" href="?page=bannersList"><i class="fa fa-hourglass"></i> Atualizar</a>
            <a class="btn btn-success" href="?page=bannerCadastro"><i class="fa fa-sticky-note"></i>Cadastrar</a>
        </div>
    </div>
</header>
<hr>
<table class="table table-hover">
    <thead>
    <tr>
        <th width="40%">Título</th>
        <th>Ordem</th>
        <th>Status</th>
        <th>Ações</th>
    </tr>
    </thead>
    <tbody>
    <?php
    if ($dados) {
        foreach($dados as $banner):
            ?>
            <tr>
                <td><?= $banner['titulo']; ?></td>
                <td><?= $banner['ordem']; ?></td>
                <?php
                if ($banner['status'] == 1){
                    ?><td>
                    <form action="../admin/Banner/Controller/editBanner.php" method="post">
                        <input id="edit_status" name="edit_status" hidden="hidden" value="<?= $banner['id']; ?>">
                        <button type="submit" class="btn btn-success">Ativo</button>
                    </form>
                    </td><?php
                } else{
                    ?><td>
                    <form action="../admin/Banner/Controller/editBanner.php" method="post">
                        <input id="edit_status" name="edit_status" hidden="hidden" value="<?= $banner['id']; ?>">
                        <button type="submit" class="btn btn-dark">Inativo</button>
                    </form>
                    </td><?php
                } ?>
                <td class="actions text-left">
                    <a class="btn btn-sm btn-warning" href="?page=bannerForm&bannerId=<?= $banner['id']; ?>">
                        <i class="fa fa-edit"></i>Editar</a>
                    <a class="btn btn-sm btn-danger" href="../admin/Banner/Controller/delBanner.php?bannerId=<?= $banner['id']; ?>">
                        <i class="fa fa-trash"></i> Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php } else { ?>
        <tr>
            <td colspan="6">Nenhum banner cadastrado.</td>
        </tr>
    <?php } ?>
    </tbody>
</table>