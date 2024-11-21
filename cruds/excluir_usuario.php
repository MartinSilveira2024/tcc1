<?php
require_once "../conecta.php";
session_start();
$id_usuario = $_GET['id_usuario'];

$sql = "DELETE FROM usuarios WHERE id_usuario=$id_usuario";
$result = mysqli_query($connect, $sql);
if ($result) {
    header("Location: crud_usuario.php");
} else {
    echo mysqli_errno($connect) . ": " . mysqli_error($connect);
}