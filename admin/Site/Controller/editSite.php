<?php
require "../../../Util/Metodo.php";
$metodo = new Metodo();

$descricao_site = isset($_POST['descricao_site']) ? $_POST['descricao_site'] : null;
$descricao = isset($_POST['descricao']) ? $_POST['descricao'] : null;
$logotipo = isset($_POST['logotipo']) ? $_POST['logotipo'] : null;
$palavra_chave = isset($_POST['palavra_chave']) ? $_POST['palavra_chave'] : null;
$estado = isset($_POST['estado']) ? $_POST['estado'] : null;
$municipio = isset($_POST['municipio']) ? $_POST['municipio'] : null;
$bairro = isset($_POST['bairro']) ? $_POST['bairro'] : null;
$logradouro = isset($_POST['logradouro']) ? $_POST['logradouro'] : null;
$numero = isset($_POST['numero']) ? $_POST['numero'] : null;
$complemento = isset($_POST['complemento']) ? $_POST['complemento'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$email_contato = isset($_POST['email_contato']) ? $_POST['email_contato'] : null;
$email_trabalhe = isset($_POST['email_trabalhe']) ? $_POST['email_trabalhe'] : null;
$telefone = isset($_POST['telefone']) ? $_POST['telefone'] : null;
$telefone_s = isset($_POST['telefone_s']) ? $_POST['telefone_s'] : null;
$twitter = isset($_POST['twitter']) ? $_POST['twitter'] : null;
$facebook = isset($_POST['facebook']) ? $_POST['facebook'] : null;
$youtube = isset($_POST['youtube']) ? $_POST['youtube'] : null;
$linkedin = isset($_POST['linkedin']) ? $_POST['linkedin'] : null;
$gm_latitude = isset($_POST['gm_latitude']) ? $_POST['gm_latitude'] : null;
$gm_longitude = isset($_POST['gm_longitude']) ? $_POST['gm_longitude'] : null;
$gm_tipo = isset($_POST['gm_tipo']) ? $_POST['gm_tipo'] : null;
$ga_email = isset($_POST['ga_email']) ? $_POST['ga_email'] : null;
$ga_senha = isset($_POST['ga_senha']) ? $_POST['ga_senha'] : null;
$ga_perfil = isset($_POST['ga_perfil']) ? $_POST['ga_perfil'] : null;
$email_tipo = isset($_POST['email_tipo']) ? $_POST['email_tipo'] : null;
$email_seguranca = isset($_POST['email_seguranca']) ? $_POST['email_seguranca'] : null;
$email_servidor = isset($_POST['email_servidor']) ? $_POST['email_servidor'] : null;
$email_protocolo = isset($_POST['email_protocolo']) ? $_POST['email_protocolo'] : null;
$email_smtp = isset($_POST['email_smtp']) ? $_POST['email_smtp'] : null;
$email_usuario = isset($_POST['email_usuario']) ? $_POST['email_usuario'] : null;
$email_senha = isset($_POST['email_senha']) ? $_POST['email_senha'] : null;
$email_porta = isset($_POST['email_porta']) ? $_POST['email_porta'] : null;
$midia_mimetype = isset($_POST['midia_mimetype']) ? $_POST['midia_mimetype'] : null;
$online = isset($_POST['online']) ? $_POST['online'] : null;
$mensagem_off = isset($_POST['mensagem_off']) ? $_POST['mensagem_off'] : null;
$whitelist = isset($_POST['whitelist']) ? $_POST['whitelist'] : null;
$blacklist = isset($_POST['blacklist']) ? $_POST['blacklist'] : null;

if (empty($descricao_site) || empty($estado) || empty($online) ||  empty($mensagem_off)) {
    echo "Preencha todos os campos.";
    exit;
}

$metodo->editSite($descricao_site,$descricao,$logotipo,$palavra_chave,$estado,$municipio,$bairro, $logradouro,$numero,$complemento,$email,$email_contato,$email_trabalhe,
$telefone,$telefone_s,$twitter,$facebook,$youtube,$linkedin,$gm_latitude,$gm_longitude,$gm_tipo,$ga_email,$ga_senha,$ga_perfil, $email_tipo, $email_seguranca,
$email_servidor,$email_protocolo,$email_smtp,$email_usuario,$email_senha,$email_porta,$midia_mimetype,$online,$mensagem_off,$whitelist,$blacklist);


header("Location: ../../?page=usuariosList");

?>