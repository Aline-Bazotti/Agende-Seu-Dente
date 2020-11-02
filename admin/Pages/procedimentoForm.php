<?php

$id = isset($_GET['procedimentoId']) ? $_GET['procedimentoId'] : null;

if (empty($id)) {
    echo "Pedido inválido.";
    exit;
}
$procedimento = $metodo->buscarProcedimentoPorId($id);

?>

<h2>Editar Procedimento - <?= $procedimento['descricao'] ?></h2>
<hr />
<form action="../admin/Procedimento/Controller/editProcedimento.php" method="post">
    <input type="hidden" id="procedimentoId" name="procedimentoId" value="<?= $procedimento['id'] ?>">
    <div>
        <label class="desc" id="descricao" for="descricao">Descrição*</label>
        <div>
            <input id="descricao" name="descricao" type="text" class="field text fn" value="<?= $procedimento['descricao'] ?>" size="80" tabindex="1"  required="required">
        </div>
    </div>

    <div>
        <label class="desc" id="duracao" for="duracao">Duração Média*</label>
        <div>
            <input id="duracao" name="duracao" type="time" class="field text fn" value="<?= $procedimento['duracao_media'] ?>" required="required">
        </div>
    </div>


    <div>
        <div>
            <br>
            <button class="btn btn-sm btn-success" type="submit" >Salvar</button>
            <a href="?page=procedimentosList" class="btn btn-sm btn-danger">Cancelar</a>
        </div>
    </div>
</form>
