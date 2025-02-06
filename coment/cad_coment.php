<?php 
session_start();
$coment = $_GET['coment'];
$id_forum = $_GET['id_forum'];
$id_user = $_SESSION['id_usuario'];

require_once "../conecta.php";

$sql = "INSERT INTO comentarios(id_forum, coment, id_usuario) VALUES ('$id_forum','$coment', '$id_user')";
$query_cadastros = mysqli_query($conexao, $sql);

if ($query_cadastros) {
    $_SESSION['msg'] = "Comentário cadastrado com sucesso!";
    header("Location: ../forum/pag_forum.php?id_forum=". $id_forum);
}
else {
    echo "Erro ao cadastrar comentário";
}

?>