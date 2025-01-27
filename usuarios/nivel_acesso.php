<?php

include_once '../conecta.php';
$email = $_POST["email"];
$senha = $_POST["senha"];

$seleciona_email = "SELECT * FROM usuarios WHERE email_user = '$email' AND senha_user = '$senha'";
$resultado = mysqli_query($conexao, $seleciona_email);
$usuario = mysqli_fetch_assoc($resultado);
if ($usuario == null) {
    echo "email ou senha errada"; die;
}
$nome = $usuario['nome_user'];
$id = $usuario['id_usuario'];
$email = $usuario['email_user'];
$foto_user = $usuario['foto_user'];
$tipo_usuario = $usuario['nivel_acesso'];
session_start();
$_SESSION['nome_user'] = $nome;
$_SESSION['email_user'] = $email;
$_SESSION['id_usuario'] = $id;
$_SESSION['foto_user'] = $foto_user;
$_SESSION['nivel_acesso'] = $tipo_usuario;
if ($usuario['nivel_acesso'] == 'usr') {
    header('location: ../jogo/teste_cards.php');
} else if ($usuario['nivel_acesso'] == 'adm') {
    header('location: ../jogo/teste_cards.php');
}
