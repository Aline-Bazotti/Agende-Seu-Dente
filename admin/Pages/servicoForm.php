<?php

$id = isset($_GET['servicoId']) ? $_GET['servicoId'] : null;

if (empty($id)) {
    echo "Pedido inválido.";
    exit;
}
$servico = $metodo->buscarServicoPorid($id);

?>

<h2>Editar Serviço - <?= $servico['descricao'] ?></h2>
<hr />
<form action="../admin/Servicos/Controller/editServico.php" method="post" enctype="multipart/form-data">
    <input type="hidden" id="servicoId" name="servicoId" value="<?= $servico['id'] ?>">
    <div>
        <label class="desc" id="descricao" for="descricao">Título*</label>
        <div>
            <input id="descricao" name="descricao" type="text" class="field text fn" value="<?= $servico['descricao'] ?>" size="45" tabindex="1" placeholder="Título do Serviço" required="required">
        </div>
    </div>

    <div>
        <label class="desc" id="texto" for="texto">Descrição*</label>
        <div>
            <input id="texto" name="texto" type="text" class="field text fn" value="<?= $servico['texto'] ?>" size="80" tabindex="1" required="required">
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
            <img src="../admin/Servicos/img/<?= $servico['imagem'] ?>" width="250" height="250">
            <input id="imagem" name="imagem" type="file">
        </div>
    </div>
    <div>
        <div>
            <br>
            <button class="btn btn-sm btn-success" type="submit" >Salvar</button>
            <a href="?page=servicosList" class="btn btn-sm btn-danger">Cancelar</a>
        </div>
    </div>
</form>
