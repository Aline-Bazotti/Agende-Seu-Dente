<?php
require "../../../Util/Metodo.php";
$metodo = new Metodo();

$desc = isset($_POST['descricao']) ? $_POST['descricao'] : null;
$principal = isset($_POST['principal']) ? $_POST['principal'] : null;
$uf_estado = isset($_POST['estado']) ? $_POST['estado'] : null;
$id_municipio = isset($_POST['municipio']) ? $_POST['municipio'] : null;
$cep = isset($_POST['cep']) ? $_POST['cep'] : null;
$bairro = isset($_POST['bairro']) ? $_POST['bairro'] : null;
$logradouro = isset($_POST['logradouro']) ? $_POST['logradouro'] : null;
$numero = isset($_POST['numero']) ? $_POST['numero'] : null;
$complemento = isset($_POST['complemento']) ? $_POST['complemento'] : null;
$id_paciente = isset($_POST['pacienteId']) ? $_POST['pacienteId'] : null;




if (empty($id_paciente)) {
    echo "Solicitação inválida";
    exit;
}
$senha = sha1($senhas);

$metodo->addEndereco($desc,$logradouro,$numero,$complemento,$cep,$id_municipio,$uf_estado,$principal,$id_paciente,$bairro);

header("Location: ../../?page=pacienteForm&pacienteId=".$id_paciente);

?>