<?php
require "../../../Util/Metodo.php";
$metodo = new Metodo();

$descricao = isset($_POST['descricao']) ? $_POST['descricao'] : null;
$duracao = isset($_POST['duracao']) ? $_POST['duracao'] : null;


if (empty($descricao) || empty($duracao)) {
    echo "Preencha todos os campos.";
    exit;
}

$metodo->addProcedimento($descricao,$duracao);

header("Location: ../../?page=procedimentosList");

?>