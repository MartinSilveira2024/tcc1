<?php
require_once "../conecta.php";
session_start();
$id_forum = $_GET['id_forum'];

$sql = "DELETE FROM forum WHERE id_forum=$id_forum";
$result = mysqli_query($conexao, $sql);
if ($result) {
    $_SESSION['msg'] = "forum excluido com sucesso";
    header("Location: ../cruds/crud_forum.php");
} else {
    echo mysqli_errno($conexao) . ": " . mysqli_error($conexao);
}