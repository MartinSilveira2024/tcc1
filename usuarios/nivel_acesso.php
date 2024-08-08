<?php

include_once '../conecta.php';
$email = $_POST["email"];
$senha = $_POST["senha"];

$seleciona_email = "SELECT * FROM usuarios WHERE email_user = '$email'";
$resultado = mysqli_query($connect, $seleciona_email);
$usuario = mysqli_fetch_assoc($resultado);

if ($usuario != null) {
    if ($usuario['senha_user'] == $senha) {
        session_start();
        $_SESSION['usuario'] = $usuario;
        if ($usuario['nivel_acesso'] == 'usr') {
            header('location: ../categorias.php');
        } else if ($usuario['nivel_acesso'] == 'adm') {
            header('location: ../categorias_adm.php');
        }
    } else {
        echo "senha errada";
    }
} else {
    echo "email nao existe";
}