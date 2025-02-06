<?php
require_once "../conecta.php";
session_start();
$id_usuario = $_SESSION['id_usuario'];

$sql = "DELETE FROM usuarios WHERE id_usuario=$id_usuario";
$result = mysqli_query($conexao, $sql);
if ($result = mysqli_query($conexao, $sql) === TRUE) {
} else {
    if ($conexao->errno == 1451) {
        $_SESSION['msg'] = "Não é possível excluir, pois você está relacionado a outros dados no sistema";
        header("Location: perfil_usuario.php");
    }
}
// $result = mysqli_query($conexao, $sql);
if ($result) {
    header("Location: ../index.php");
} else {
    echo mysqli_errno($conexao) . ": " . mysqli_error($conexao);
}