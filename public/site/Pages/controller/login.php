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

$users = $metodo->LoginPaciente($email, $senha);

if (count($users) <= 0) {
    echo "Email ou senha incorretos";
    exit;
}

// pega o primeiro usuário
$user = $users[0];

session_start();
$_SESSION['logged_in'] = array(
    'logged_in' => true,
    'user_id' => $user['id'],
    'user_name' => $user['nome']
);



header('Location: http://localhost/admin');
