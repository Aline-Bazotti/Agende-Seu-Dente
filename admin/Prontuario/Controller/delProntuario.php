<?php
require "../../../Util/Metodo.php";
$metodo = new Metodo();

$id = isset($_GET['prontuarioId']) ? $_GET['prontuarioId'] : null;

if (empty($id)) {
    echo "Pedido inválido.";
    exit;
}

$metodo->delProntuario($id);

header("Location: ../../?page=prontuariosList");

?>