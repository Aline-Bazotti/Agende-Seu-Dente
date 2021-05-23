<?php
require "../../Util/Metodo.php";

$metodo = new Metodo();

$nome = isset($_POST['nome']) ? $_POST['nome'] : null;
$cpf_cpnj = isset($_POST['cpf_cpnj']) ? $_POST['cpf_cpnj'] : null;
$data_nascimento = isset($_POST['data_nascimento']) ? $_POST['data_nascimento'] : null;
$telefone = isset($_POST['telefone']) ? $_POST['telefone'] : null;
$dor = isset($_POST['dor']) ? $_POST['dor'] : null;
$desc = isset($_POST['desc']) ? $_POST['desc'] : null;
$quanto_tempo = isset($_POST['quanto_tempo']) ? $_POST['quanto_tempo'] : null;
$gestante = isset($_POST['gestante']) ? $_POST['gestante'] : null;
$semanas = isset($_POST['semanas']) ? $_POST['semanas'] : null;
$aceita_whatsapp = isset($_POST['aceita_whatsapp']) ? $_POST['aceita_whatsapp'] : null;

if (empty($nome) || empty($data_nascimento)) {
    echo "Preencha todos os campos";
    exit;
}

try {
    $metodo->addEvento($nome,$cpf_cpnj,$data_nascimento,$dor,$desc,$quanto_tempo,$gestante,$semanas,$telefone,$aceita_whatsapp);
}catch (Exception $e){
    header("Location: https://$_SERVER[SERVER_NAME]/?page=agendaList&success=false");
}

header("Location: https://$_SERVER[SERVER_NAME]/?page=agendaList&success=true");
?>

