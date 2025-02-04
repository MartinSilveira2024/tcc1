<?php

session_start();
require_once "../conecta.php";

$id_categoria = $_POST['id_categoria'];
$nome_categoria = $_POST['nome_categoria'];

$sql = "UPDATE categorias SET nome_categoria ='$nome_categoria' WHERE id_categoria=$id_categoria";
$result = mysqli_query($conexao, $sql);
if ($result) {
    $_SESSION['msg'] = "Categoria alterada com sucesso";
    header("Location: ../cruds/crud_categorias.php");
} else {
    echo mysqli_errno($conexao) . ": " . mysqli_error($conexao);
}