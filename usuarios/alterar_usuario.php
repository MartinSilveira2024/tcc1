<?php

session_start();
require_once "../conecta.php";

$id_usuario = $_POST['id_usuario'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "UPDATE usuarios SET nome_user ='$nome', email_user='$email', senha_user='$senha' WHERE id_usuario=$id_usuario";
$result = mysqli_query($conexao, $sql);
if ($result) {
    header("Location: ../cruds/crud_usuario.php");
} else {
    echo mysqli_errno($conexao) . ": " . mysqli_error($conexao);
}