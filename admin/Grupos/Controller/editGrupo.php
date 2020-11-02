<?php
require "../../../Util/Metodo.php";
$metodo = new Metodo();

$grupo_id = isset($_POST['grupoId']) ? $_POST['grupoId'] : null;
$grupo_nome = isset($_POST['grupoNome']) ? $_POST['grupoNome'] : null;
$grupo_permissao = isset($_POST['grupoPermissoes']) ? $_POST['grupoPermissoes'] : null;

if (empty($grupo_id) || empty($grupo_nome) ||  empty($grupo_permissao)) {
    echo "Preencha todos os campos.";
    exit;
}

$metodo->editGrupo($grupo_id,$grupo_nome,$grupo_permissao);

header("Location: ../../?page=gruposList");

?>