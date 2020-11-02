<?php
require "../../../Util/Metodo.php";
$metodo = new Metodo();


$id = isset($_POST['procedimentoId']) ? $_POST['procedimentoId'] : null;
$descricao = isset($_POST['descricao']) ? $_POST['descricao'] : null;
$duracao = isset($_POST['duracao']) ? $_POST['duracao'] : null;


if (empty($descricao) || empty($duracao)) {
    echo "Preencha todos os campos.";
    exit;
}

$metodo->editProcedimento($id,$descricao,$duracao);

header("Location: ../../?page=procedimentosList");

?>