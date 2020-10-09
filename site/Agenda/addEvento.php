<?php
require "../../Util/Metodo.php";

$metodo = new Metodo();

$nome = isset($_POST['nome']) ? $_POST['nome'] : null;
$cpf_cpnj = isset($_POST['cpf_cpnj']) ? $_POST['cpf_cpnj'] : null;
$data_nascimento = isset($_POST['data_nascimento']) ? $_POST['data_nascimento'] : null;
$dor = isset($_POST['dor']) ? $_POST['dor'] : null;
$desc = isset($_POST['desc']) ? $_POST['desc'] : null;
$quanto_tempo = isset($_POST['quanto_tempo']) ? $_POST['quanto_tempo'] : null;
$gestante = isset($_POST['gestante']) ? $_POST['gestante'] : null;
$semanas = isset($_POST['semanas']) ? $_POST['semanas'] : null;

if (empty($nome) || empty($data_nascimento)) {
    ?>
    <form action="site/Pages/agendaList.php" method="post">
        <input name="mensagem" id="mensagem" readonly="readonly" value="falha">
    </form>
    <?php
    exit;
}

$metodo->addEvento($nome,$cpf_cpnj,$data_nascimento,$dor,$desc,$quanto_tempo,$gestante,$semanas);
?>
<form action="site/Pages/agendaList.php" method="post">
    <input name="mensagem" id="mensagem" readonly="readonly" value="sucesso">
</form>

<?php
header("Location: http://localhost/?page=agendaList");
?>

