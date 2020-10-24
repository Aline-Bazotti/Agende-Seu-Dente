<?php
require "../../../Util/Metodo.php";
$metodo = new Metodo();

$id = isset($_GET['pacienteId']) ? $_GET['pacienteId'] : null;

if (empty($id)) {
    echo "Pedido inválido.";
    exit;
}

$metodo->delPaciente($id);

header("Location: ../../?page=pacientesList");

?>