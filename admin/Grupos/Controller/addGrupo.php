<?php
require "../../../Util/Metodo.php";
$metodo = new Metodo();

$grupo_nome = isset($_POST['grupoNome']) ? $_POST['grupoNome'] : null;
$grupo_permissao = isset($_POST['grupoPermissoes']) ? $_POST['grupoPermissoes'] : null;

if (empty($grupo_nome) ||  empty($grupo_permissao)) {
    echo "Preencha todos os campos.";
    exit;
}

$metodo->addGrupo($grupo_nome,$grupo_permissao);

header("Location: ../../?page=gruposList");

?>