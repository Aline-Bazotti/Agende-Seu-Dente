<?php
require "../../../Util/Metodo.php";
$metodo = new Metodo();

$id = isset($_GET['usuarioId']) ? $_GET['usuarioId'] : null;

if (empty($id)) {
    echo "Pedido inválido.";
    exit;
}

$metodo->delUsuario($id);

header("Location: ../../?page=usuariosList");

?>