<?php
include_once "conecta.php";
$pastaDestino = "/uploads/";
$categoria = $_POST['categoria'];
$nome = $_POST['nome_jogo'];
$sub = $_POST['empresa_jogo'];
$tit = $_POST['corp_forum'];


$sql = "INSERT INTO forum(titulo,subtitulo, corpo_texto) VALUES ('$nome','$sub', '$tit')";
$resultado = mysqli_query($connect,$sql);

mysqli_close($connect);

if ($resultado)

{
	header('Location: pag_forum.php');
	
}

else {
	echo "erro ao cadastrar forum";
}
?>