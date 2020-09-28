<?php
require "../../Util/Metodo.php";
$metodo = new Metodo();
$dados = $metodo->buscarTodosBanners();
include "../menuLateral.php";
?>

<header>
    <div class="row">
        <div class="col-sm-6">
            <h2>Banners</h2>
        </div>
        <div class="col-sm-6 text-center h2">
            <a class="btn btn-info" href="bannersList.php"><i class="fa fa-hourglass"></i> Atualizar</a>
            <a class="btn btn-success" href="bannerCadastro.php"><i class="fa fa-sticky-note"></i>Cadastrar</a>
        </div>
    </div>
</header>
<hr>
<table class="table table-hover">
    <thead>
    <tr>
        <th>ID</th>
        <th>Título</th>
        <th>Ordem</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody>
    <?php
    if ($dados) {
        foreach($dados as $banner):
            ?>
            <tr>
                <td><?= $banner['id']; ?></td>
                <td><?= $banner['titulo']; ?></td>
                <td><?= $banner['ordem']; ?></td>
                <td><?= $banner['status']; ?></td>
                <td class="actions text-left">
                    <form method="post" action="bannerForm.php">
                        <input type="hidden" name="grupoId" id="grupoId" value="<?= $banner['id']; ?>">
                        <button class="btn btn-sm btn-warning">
                            <i class="fa fa-edit"></i> Editar
                        </button>
                    </form>
                    <form method="post" action="Controller/delBanner.php">
                        <input type="hidden" name="grupoId" id="grupoId" value="<?= $banner['id']; ?>">
                        <button class="btn btn-sm btn-danger">
                            <i class="fa fa-trash"></i> Excluir
                        </button>
                    </form>
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