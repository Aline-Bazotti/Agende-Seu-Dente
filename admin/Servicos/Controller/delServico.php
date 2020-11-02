<?php
require "../../../Util/Metodo.php";
$metodo = new Metodo();

$id = isset($_GET['servicoId']) ? $_GET['servicoId'] : null;

if (empty($id)) {
    echo "Pedido inválido.";
    exit;
}

$metodo->delServico($id);

header("Location: ../../?page=servicosList");

?>