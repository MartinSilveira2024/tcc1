<?php
require_once "../conecta.php";
session_start();
$id_jogo = $_GET['id_jogo'];

$sql = "DELETE FROM jogos WHERE id_jogo=$id_jogo";
$result = mysqli_query($conexao, $sql);
if ($result) {
    header("Location: crud_jogo.php");
} else {
    echo mysqli_errno($conexao) . ": " . mysqli_error($conexao);
}