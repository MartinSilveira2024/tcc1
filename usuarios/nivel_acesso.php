<?php

include_once '../conecta.php';
$email = $_POST["email"];
$senha = $_POST["senha"];

$seleciona_email = "SELECT * FROM usuarios WHERE email_user = '$email' AND senha_user = '$senha'";
$resultado = mysqli_query($connect, $seleciona_email);
$usuario = mysqli_fetch_assoc($resultado);
$nome = $usuario['nome_user'];
$id = $usuario['id_usuario'];
$email = $usuario['email_user'];
$tipo_usuario = $_SESSION['nivel_acesso'];
if ($usuario != null) {
    if ($usuario['senha_user'] == $senha) {
        session_start();
        $_SESSION['nome_user'] = $nome;
        $_SESSION['email_user'] = $email;
        $_SESSION['id_usuario'] = $id;
        $_SESSION['nivel_acesso'] = $tipo_usuario;
        if ($usuario['nivel_acesso'] == 'usr') {
            header('location: ../jogo/teste_cards.php');
        } else if ($usuario['nivel_acesso'] == 'adm') {
            header('location: ../jogo/teste_cards.php');
        }
    } else {
        echo "senha errada";
    }
} else {
    echo "email nao existe";
}