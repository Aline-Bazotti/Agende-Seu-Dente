<?php
require "../../../Util/Metodo.php";
$metodo = new Metodo();

$id = isset($_GET['historicoId']) ? $_GET['historicoId'] : null;
$paciente = isset($_GET['pacienteId']) ? $_GET['pacienteId'] : null;

if (empty($id)) {
    echo "Pedido inválido.";
    exit;
}

$metodo->delProntuarioHistorico($id);

header("Location: ../../?page=viewProntuario&pacienteId=$paciente");

?>