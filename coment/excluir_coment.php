<?php
require_once "../conecta.php";
session_start();
$id_comentario = $_GET['id_comentario'];
$id_forum = $_GET['id_forum'];

$sql = "DELETE FROM comentarios WHERE id_comentario=$id_comentario";
$result = mysqli_query($conexao, $sql);
if ($result) {
    header("Location: ../forum/pag_forum.php?id_forum=$id_forum");
} else {
    echo mysqli_errno($conexao) . ": " . mysqli_error($conexao);
}