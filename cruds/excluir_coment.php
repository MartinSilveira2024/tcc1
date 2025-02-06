<?php
require_once "../conecta.php";
session_start();
$id_comentario = $_GET['id_comentario'];

$sql = "DELETE FROM comentarios WHERE id_comentario=$id_comentario";
if ($result = mysqli_query($conexao, $sql) == TRUE) {
}  else {
      if ($conexao->errno == 1451) {
          $_SESSION['msg'] = "Não é possível excluir, pois este comentário está relacionado a outros dados no sistema";
          header("Location: crud_coment.php");
      }
} 
if ($result) {
    $_SESSION['msg'] = "Comentário excluido com sucesso";
    header("Location: crud_coment.php");
} else {
    echo mysqli_errno($conexao) . ": " . mysqli_error($conexao);
}