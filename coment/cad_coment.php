<?php 

$coment = $_GET['coment'];
$id_forum = $_GET['id_forum'];

$conexao = mysqli_connect("localhost", "root", "", "tcc");

$sql = "INSERT INTO comentarios(id_forum, coment) VALUES ('$id_forum','$coment')";
$query_cadastros = mysqli_query($conexao, $sql);

if ($query_cadastros) {
    header("Location: ../jogo/ver_jogos.php");
}
else {
    echo "Erro ao cadastrar comentário";
}

?>