<?php

$nome = $_POST['nome']; 
$email = $_POST['email'];
$senha = $_POST['senha'];
$senha2 = $_POST['rep_senha'];

$servername="localhost";
$username="root";
$password="";
$db_name="tcc";

$connect = mysqli_connect($servername, $username, $password, $db_name);

if($senha == $senha2) {
$sql = "INSERT INTO usuarios(nome_user, email_user, senha_user, nivel_acesso) VALUES ('$nome', '$email', '$senha', 'usr')";
$query_cadastros = mysqli_query($connect,$sql);
}
if ($query_cadastros)

{
	header('Location: ./login_usuario.php');
	
}

else {
	echo "deu erro";
}