<?php

$id = isset($_GET['bannerId']) ? $_GET['bannerId'] : null;

if (empty($id)) {
    echo "Pedido inválido.";
    exit;
}
$banner = $metodo->buscarBannerPorId($id);

?>

<h2>Editando - <?= $banner['titulo'] ?></h2>
<hr />
<form action="../admin/Banner/Controller/editBanner.php" method="post" enctype="multipart/form-data">
    <input type="hidden" id="bannerId" name="bannerId" value="<?= $banner['id'] ?>">
    <div>
        <label class="desc" for="titulo">Título</label>
        <div>
            <input id="titulo" name="titulo" type="text" class="field text fn" value="<?= $banner['titulo'] ?>" size="20" tabindex="1">
        </div>
    </div>

    <div>
        <label class="desc" for="descricao">Descrição*</label>
        <div>
            <input id="descricao" name="descricao" type="text" class="field text fn" value="<?= $banner['descricao'] ?>" size="50" tabindex="1" required="required">
        </div>
    </div>

    <div>
        <label class="desc" for="botao">Botão</label>
        <div>
            <input id="botao" name="botao" type="text" class="field text fn" value="<?= $banner['botao'] ?>" size="20" tabindex="1" placeholder="Digite o nome do botão">
        </div>
        <div>
            <input id="botaoLink" name="botaoLink" type="url" class="field text fn" value="<?= $banner['botaoLink'] ?>" size="80" tabindex="1" placeholder="Digite o link do botão">
        </div>
    </div>
    <div>
        <label class="desc" id="imagem" for="imagem">Imagem</label>
        <div>
            <img src="../admin/Banner/img/<?= $banner['imagem'] ?>" width="250" height="250">
            <input id="imagem" name="imagem" type="file">
        </div>
    </div>
    <div>
        <label class="desc" for="ordem">Ordem</label>
        <div>
            <input id="ordem" name="ordem" type="number" class="field text fn" value="<?= $banner['ordem'] ?>" size="10" tabindex="1" required="required">
        </div>
    </div>
    <div>
        <label class="desc" id="status" for="status">
            Status*
        </label>
        <div>
            <select id="status" name="status" class="field select medium" tabindex="11" required="required">
                <option value="1">Ativo</option>
                <option value="0">Inativo</option>
            </select>
        </div>
    </div>
    <div>
        <div>
            <br>
            <button class="btn btn-sm btn-success" type="submit" >Salvar</button>
            <a href="?page=bannersList" class="btn btn-sm btn-danger">Cancelar</a>
        </div>
    </div>
</form>
