<?php
require "../../../Util/Metodo.php";
$metodo = new Metodo();

$nome = isset($_POST['nome']) ? $_POST['nome'] : null;
$cpf_cpnj = isset($_POST['cpf_cnpj']) ? $_POST['cpf_cnpj'] : null;
$rg_ie = isset($_POST['rg_ie']) ? $_POST['rg_ie'] : null;
$data_nasc = isset($_POST['data_nascimento']) ? $_POST['data_nascimento'] : null;
$telefone = isset($_POST['telefone']) ? $_POST['telefone'] : null;
$telefone_s = isset($_POST['telefone_s']) ? $_POST['telefone_s'] : null;
$naturalidade = isset($_POST['naturalidade']) ? $_POST['naturalidade'] : null;
$nacionalidade = isset($_POST['nacionalidade']) ? $_POST['nacionalidade'] : null;
$estado_civil = isset($_POST['estado_civil']) ? $_POST['estado_civil'] : null;
$sexo = isset($_POST['sexo']) ? $_POST['sexo'] : null;
$nome_conjuge = isset($_POST['nome_conjuge']) ? $_POST['nome_conjuge'] : null;
$nome_pai = isset($_POST['nome_pai']) ? $_POST['nome_pai'] : null;
$nome_mae = isset($_POST['nome_mae']) ? $_POST['nome_mae'] : null;
$nome_responsavel = isset($_POST['nome_responsavel']) ? $_POST['nome_responsavel'] : null;
$indicacao_dr = isset($_POST['indicacao_dr']) ? $_POST['indicacao_dr'] : null;
$nome_empresa = isset($_POST['nome_empresa']) ? $_POST['nome_empresa'] : null;
$telefone_empresa = isset($_POST['telefone_empresa']) ? $_POST['telefone_empresa'] : null;
$profissao = isset($_POST['profissao']) ? $_POST['profissao'] : null;
$horario_trabalho = isset($_POST['horario_trabalho']) ? $_POST['horario_trabalho'] : null;
$cargo = isset($_POST['cargo']) ? $_POST['cargo'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$senhas = isset($_POST['senha']) ? $_POST['senha'] : null;


if (empty($nome) || empty($cpf_cpnj)) {
    echo "Preencha todos os campos.";
    exit;
}
$senha = sha1($senhas);

$metodo->addPaciente($nome,$cpf_cpnj,$data_nasc,$nome_responsavel,$telefone,$telefone_s,$rg_ie,$nome_pai,$nome_mae,$email,$senha,$indicacao_dr,
    $nome_empresa,$telefone_empresa,$profissao,$horario_trabalho,$cargo,$naturalidade,$nacionalidade,$estado_civil,$nome_conjuge,$sexo);

header("Location: ../../?page=pacientesList");

?>