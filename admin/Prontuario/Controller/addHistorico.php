<?php
require "../../../Util/Metodo.php";
$metodo = new Metodo();

$id_prontuario = isset($_POST['prontuarioId']) ? $_POST['prontuarioId'] : null;
$data_procedimento = isset($_POST['data_procedimento']) ? $_POST['data_procedimento'] : null;
$dente = isset($_POST['dente']) ? $_POST['dente'] : null;
$procedimento = isset($_POST['procedimento']) ? $_POST['procedimento'] : null;




if (empty($id_prontuario)) {
    echo "Preencha todos os campos.";
    exit;
}

$metodo->addProntuarioHistorico($data_procedimento,$dente, $procedimento, $id_prontuario);

header("Location: ../../?page=prontuariosList");

?>