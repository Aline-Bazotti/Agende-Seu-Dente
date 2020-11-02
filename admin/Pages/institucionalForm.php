<?php

$id = isset($_GET['institucionalId']) ? $_GET['institucionalId'] : null;

if (empty($id)) {
    echo "Pedido inválido.";
    exit;
}
$institucional = $metodo->buscarInstitucionalPorId($id);

?>

<h2>Editando - <?= $institucional['descricao'] ?></h2>
<hr />
<form action="../admin/Institucional/Controller/editInstitucional.php" method="post" enctype="multipart/form-data">
    <input type="hidden" id="institucionalId" name="institucionalId" value="<?= $institucional['id'] ?>">
    <div>
        <label class="desc" id="descricao" for="descricao">Título*</label>
        <div>
            <input id="descricao" name="descricao" type="text" class="field text fn" value="<?= $institucional['descricao'] ?>" size="45" tabindex="1" placeholder="Missão" required="required">
        </div>
    </div>

    <div>
        <label class="desc" id="texto" for="texto">Descrição*</label>
        <div>
            <input id="texto" name="texto" type="text" class="field text fn" value="<?= $institucional['texto'] ?>" size="80" tabindex="1" required="required">
        </div>
    </div>

    <div>
        <label class="desc" id="status" for="Status">
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
        <label class="desc" id="inicial" for="inicial">
            Inicial*
        </label>
        <div>
            <select id="inicial" name="inicial" class="field select medium" tabindex="11" required="required">
                <option value="1">Sim</option>
                <option value="0">Não</option>
            </select>
        </div>
    </div>
    <div>
        <label class="desc" id="imagem" for="imagem">Imagem</label>
        <div>
            <img src="../admin/Institucional/img/<?= $institucional['imagem'] ?>" width="250" height="250">
            <input id="imagem" name="imagem" type="file">
        </div>
    </div>
    <div>
        <div>
            <br>
            <button class="btn btn-sm btn-success" type="submit" >Salvar</button>
            <a href="?page=institucionalList" class="btn btn-sm btn-danger">Cancelar</a>
        </div>
    </div>
</form>
