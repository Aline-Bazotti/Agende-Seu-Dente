<?php 
// Inicia sessões
session_start();

// Verifica se existe os dados da sessão de login
if(!isset($_SESSION['logged_in']))
{
// Usuário não logado! Redireciona para a página de login
	session_destroy();
	header("Location: http://localhost/");
}
?> 