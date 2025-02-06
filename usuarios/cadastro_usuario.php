<?php

require_once "../conecta.php";
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$senha2 = $_POST['rep_senha'];
$sql = "SELECT * FROM usuarios WHERE email_user = '$email'";
$result = mysqli_query($conexao, $sql);
if ($result) {
	$usuario = mysqli_fetch_assoc($result);
} else {
	echo mysqli_errno($conexao) . ": " . mysqli_error($conexao);
	die();
}
session_start();

if ($email == $usuario['email_user']) {
	$_SESSION['msg'] = "Este email já está cadastrado no sistema! Realize o login";
	header('Location: cadastrar_usuario.php');
}

if ($senha != $senha2) {
	$_SESSION['msg'] = "A senha não confere com o repetir senha";
	header('Location: cadastrar_usuario.php');
}

if ($senha == $senha2) {
	$sql = "INSERT INTO usuarios(nome_user, foto_user, email_user, senha_user, nivel_acesso) VALUES ('$nome', 'user_padrao.png','$email', '$senha', 'usr')";
	$query_cadastros = mysqli_query($conexao, $sql);
}
if ($query_cadastros) {
	$_SESSION['msg'] = "Usuário cadastrado com sucesso!";
	header('Location: ../index.php');
}
