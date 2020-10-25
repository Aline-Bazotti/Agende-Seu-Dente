<?php
require "../../../Util/Metodo.php";
$metodo = new Metodo();

$id = isset($_POST['historicoId']) ? $_POST['historicoId'] : null;
$data_procedimento = isset($_POST['data_procedimento']) ? $_POST['data_procedimento'] : null;
$dente = isset($_POST['dente']) ? $_POST['dente'] : null;
$procedimento = isset($_POST['procedimento']) ? $_POST['procedimento'] : null;
$paciente = isset($_POST['pacienteId']) ? $_POST['pacienteId'] : null;

if (empty($id)) {
    echo "Preencha todos os campos.";
    exit;
}

$metodo->editProntuarioHistorico($id,$data_procedimento,$dente,$procedimento);

header("Location: ../../?page=viewProntuario&pacienteId=$paciente");

?>