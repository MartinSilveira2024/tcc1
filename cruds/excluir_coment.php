<?php
require_once "../conecta.php";
session_start();
$id_comentario = $_GET['id_comentario'];

$sql = "DELETE FROM comentarios WHERE id_comentario=$id_comentario";
$result = mysqli_query($conexao, $sql);
if ($result) {
    $_SESSION['msg'] = "Comentário excluido com sucesso";
    header("Location: crud_coment.php");
} else {
    echo mysqli_errno($conexao) . ": " . mysqli_error($conexao);
}