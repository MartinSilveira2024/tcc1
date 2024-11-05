<?php
require_once "conecta.php";
session_start();
$id_usuario = $_SESSION['id_usuario'];

$sql = "DELETE FROM usuarios WHERE id_usuario=$id_usuario";
$result = mysqli_query($connect, $sql);
if ($result) {
    header("Location: ../index.php");
} else {
    echo mysqli_errno($connect) . ": " . mysqli_error($connect);
}