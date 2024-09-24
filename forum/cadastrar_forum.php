<?php

$titulo = $_POST['titulo']; 
$subtitulo = $_POST['subtitulo'];
$corpo_texto = $_POST['corpo_texto'];

$conexao = mysqli_connect("localhost", "root", "", "tcc");


$sql = "INSERT INTO forum(id_usuario,id_jogo, titulo, subtitulo, corpo_texto) VALUES ('109','2','$titulo', '$subtitulo', '$corpo_texto')";
$query_cadastros = mysqli_query($conexao,$sql);

if ($query_cadastros)

{
	header('Location: cad_forum.php');
	
}

else {
	echo "deu erro";
}