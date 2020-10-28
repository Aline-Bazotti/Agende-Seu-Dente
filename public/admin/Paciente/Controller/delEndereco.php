<?php
require "../../../Util/Metodo.php";
$metodo = new Metodo();

$id = isset($_GET['id']) ? $_GET['id'] : null;
$id_paciente = isset($_GET['pacienteId']) ? $_GET['pacienteId'] : null;


if (empty($id)) {
    echo "Pedido inválido.";
    exit;
}

$metodo->delEndereco($id);

header("Location: ../../?page=pacienteForm&pacienteId=".$id_paciente);

?>