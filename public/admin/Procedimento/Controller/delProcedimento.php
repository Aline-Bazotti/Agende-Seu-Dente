<?php
require "../../../Util/Metodo.php";
$metodo = new Metodo();

$id = isset($_GET['procedimentoId']) ? $_GET['procedimentoId'] : null;

if (empty($id)) {
    echo "Pedido inválido.";
    exit;
}

$metodo->delProcedimento($id);

header("Location: ../../?page=procedimentosList");

?>