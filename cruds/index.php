<?php 
session_start(); 
if(($_SESSION['nivel_acesso']) == 'usr') {
    echo "Você não tem permissão para acessar a página"; die;
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cruds</title>
</head>
<body> 
    <a href="crud_coment.php">Crud dos comentários</a> <br>
    <a href="crud_coment.php">Crud dos fóruns</a> <br>
    <a href="crud_coment.php">Crud dos jogos</a> <br>
    <a href="crud_coment.php">Crud dos usuários</a>
</body>
</html>