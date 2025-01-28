<?php

session_start();
require_once "../conecta.php";

$id_coment = $_POST['id_comentario'];
$id_forum = $_POST['id_forum'];
$coment = $_POST['coment'];

$sql = "UPDATE comentarios SET coment ='$coment' WHERE id_comentario=$id_coment";
$result = mysqli_query($conexao, $sql);
if ($result) {
    header("Location: ../forum/pag_forum.php?id_forum=$id_forum");
} else {
    echo mysqli_errno($conexao) . ": " . mysqli_error($conexao);
}