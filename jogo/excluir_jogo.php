<?php
require_once "../conecta.php";
session_start();
$id_jogo = $_GET['id_jogo'];

$sql = "DELETE FROM jogos WHERE id_jogo=$id_jogo";
if ($result = mysqli_query($conexao, $sql) === TRUE) {
} else {
    if ($conexao->errno == 1451) {
        echo "Não é possível excluir, pois este jogo está relacionado a outros dados no sistema."; die;
    } else {
        echo "Erro";
    }
}
// $result = mysqli_query($conexao, $sql);
if ($result) {
    header("Location: ../cruds/crud_jogo.php");
} else {
    echo mysqli_errno($conexao) . ": " . mysqli_error($conexao);
}