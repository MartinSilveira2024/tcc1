<?php
require_once "../conecta.php";
session_start();
$id_forum = $_GET['id_forum'];

$sql = "DELETE FROM forum WHERE id_forum=$id_forum";
if ($result = mysqli_query($conexao, $sql) == TRUE) {
}  else {
      if ($conexao->errno == 1451) {
          $_SESSION['msg'] = "Não é possível excluir, pois este fórum está relacionado a outros dados no sistema";
          header("Location: crud_forum.php");
      }
} 
if ($result) {
    $_SESSION['msg'] = "Fórum excluido com sucesso";
    header("Location: crud_forum.php");
} else {
    echo mysqli_errno($conexao) . ": " . mysqli_error($conexao);
}