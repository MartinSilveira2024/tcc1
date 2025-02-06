<?php
require_once "../conecta.php";
session_start();
$id_jogo = $_GET['id_jogo'];

$sql = "DELETE FROM jogos WHERE id_jogo=$id_jogo";
if ($result = mysqli_query($conexao, $sql) == TRUE) {
  }  else {
        if ($conexao->errno == 1451) {
            $_SESSION['msg'] = "Não é possível excluir, pois este jogo está relacionado a outros dados no sistema";
            header("Location: crud_jogo.php");
        }
} 
if ($result) {
    header("Location: crud_jogo.php");
} else {
    echo mysqli_errno($conexao) . ": " . mysqli_error($conexao);
}