<?php

require "../../../Util/Metodo.php";


$metodo = new Metodo();

// resgata variáveis do formulário
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['senha']) ? $_POST['senha'] : '';

if (empty($email) || empty($password)) {
    echo "Informe email e senha";
    exit;
}
$senha = sha1($password);

$users = $metodo->LoginAdmin($email, $senha);

if (count($users) <= 0) {
    echo "Email ou senha incorretos";
    exit;
}

// pega o primeiro usuário
$user = $users[0];

session_start();
$_SESSION['logged_in'] = true;
$_SESSION['user_id'] = $user['id'];
$_SESSION['user_name'] = $user['nome'];
$_SESSION['user_group'] = $user['id_grupo'];


var_dump($_SESSION);

header('Location: http://localhost/admin');
