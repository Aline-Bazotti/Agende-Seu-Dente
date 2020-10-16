<?php
require "../../../Util/Metodo.php";
$metodo = new Metodo();

$id = isset($_GET['institucionalId']) ? $_GET['institucionalId'] : null;

if (empty($id)) {
    echo "Pedido inválido.";
    exit;
}

$metodo->delInstitucional($id);

header("Location: ../../?page=institucionalList");

?>