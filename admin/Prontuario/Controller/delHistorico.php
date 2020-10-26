<?php
require "../../../Util/Metodo.php";
$metodo = new Metodo();

$id = isset($_GET['historicoId']) ? $_GET['historicoId'] : null;
$prontuario = isset($_GET['prontuarioId']) ? $_GET['prontuarioId'] : null;

if (empty($id)) {
    echo "Pedido inválido.";
    exit;
}

$metodo->delProntuarioHistorico($id);

header("Location: ../../?page=viewProntuario&id=$prontuario");

?>