<?php
session_start();
$titulo = $_POST['titulo']; 
$subtitulo = $_POST['subtitulo'];
$corpo_texto = $_POST['corpo_texto'];
$id_jogo = $_POST['id_jogo'];
$id_usuario = $_SESSION['id_usuario'];

require_once "../conecta.php";


$sql = "INSERT INTO forum(id_usuario,id_jogo, titulo, subtitulo, corpo_texto) VALUES ('$id_usuario',$id_jogo,'$titulo', '$subtitulo', '$corpo_texto')";
$query_cadastros = mysqli_query($conexao,$sql);
echo $sql;
if ($query_cadastros)

{
	header('Location: ../jogo/teste_cards.php');
	
}

else {
	echo "deu erro";
	echo mysqli_error($conexao);
}