<?php
require_once "../conecta.php";
session_start();
$id_categoria = $_GET['id_categoria'];

$sql = "DELETE FROM categorias WHERE id_categoria=$id_categoria";
if ($result = mysqli_query($conexao, $sql) == TRUE) {
}  else {
      if ($conexao->errno == 1451) {
          $_SESSION['msg'] = "Não é possível excluir, pois esta categoria está relacionada a outros dados no sistema";
          header("Location: crud_categorias.php");
      }
} 
if ($result) {
    $_SESSION['msg'] = "Categoria excluida com sucesso";
    header("Location: crud_categorias.php");
} else {
    echo mysqli_errno($conexao) . ": " . mysqli_error($conexao);
}