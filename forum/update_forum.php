<?php

session_start();
require_once "../conecta.php";

$id_forum = $_POST['id_forum'];
$titulo = $_POST['titulo'];
$subtitulo = $_POST['subtitulo'];
$texto = $_POST['corpo_texto'];

$sql = "UPDATE forum SET titulo ='$titulo', subtitulo='$subtitulo', corpo_texto='$texto' WHERE id_forum=$id_forum";
$result = mysqli_query($conexao, $sql);
if ($result) {
    header("Location: pag_forum.php?id_forum=". $id_forum . "");
} else {
    echo mysqli_errno($conexao) . ": " . mysqli_error($conexao);
}