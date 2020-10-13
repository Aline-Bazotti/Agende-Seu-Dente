<?php
require "../../../Util/Metodo.php";
$metodo = new Metodo();

$nome = isset($_POST['Nome']) ? $_POST['Nome'] : null;
$cpf_cpnj = isset($_POST['Cpf_cpnj']) ? $_POST['Cpf_cpnj'] : null;
$data_nasc = isset($_POST['Data_nasc']) ? $_POST['Data_nasc'] : null;
$cro = isset($_POST['CRO']) ? $_POST['CRO'] : null;
$assinatura = isset($_POST['Assinatura']) ? $_POST['Assinatura'] : null;
$telefone = isset($_POST['Telefone']) ? $_POST['Telefone'] : null;
$telefone_s = isset($_POST['Telefone_s']) ? $_POST['Telefone_s'] : null;
$status = isset($_POST['Status']) ? $_POST['Status'] : null;
$email = isset($_POST['Email']) ? $_POST['Email'] : null;
$senhas = isset($_POST['Senha']) ? $_POST['Senha'] : null;
$grupo = isset($_POST['Grupo']) ? $_POST['Grupo'] : null;

if (empty($nome) || empty($cpf_cpnj) ||  empty($grupo)) {
    echo "Preencha todos os campos.";
    exit;
}
$senha = sha1($senhas);

$metodo->addUsuario($nome,$cpf_cpnj,$data_nasc,$cro,$assinatura,$telefone,$telefone_s,$status,$email,$senha,$grupo);

header("Location: ../../?page=gruposList");

?>