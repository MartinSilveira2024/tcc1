<?php
require_once "../conecta.php";
session_start();
$id_comentario = $_GET['id_comentario'];

$sql = "DELETE FROM comentarios WHERE id_comentario=$id_comentario";
$result = mysqli_query($connect, $sql);
if ($result) {
    header("Location: ../cruds/crud_coment.php");
} else {
    echo mysqli_errno($connect) . ": " . mysqli_error($connect);
}