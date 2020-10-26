<?php
require "../../../Util/Metodo.php";
$metodo = new Metodo();

$id = isset($_GET['id']) ? $_GET['id'] : null;

if (empty($id)) {
    echo "Pedido inválido.";
    exit;
}

$metodo->delArquivo($id);

header("Location: ../../?page=arquivosList");

?>