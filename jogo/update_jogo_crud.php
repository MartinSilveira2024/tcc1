<?php

session_start();
require_once "../conecta.php";

$id_jogo = $_POST['id_jogo'];
$nome = $_POST['nome_jogo'];
$empresa = $_POST['empresa_jogo'];

$sql = "UPDATE jogos SET nome_jogo ='$nome', empresa_jogo='$empresa' WHERE id_jogo=$id_jogo";
$result = mysqli_query($conexao, $sql);
if ($result) {
    $_SESSION['msg'] = "Jogo alterado com sucesso";
    header("Location: ../cruds/crud_jogo.php");
} else {
    echo mysqli_errno($conexao) . ": " . mysqli_error($conexao);
}