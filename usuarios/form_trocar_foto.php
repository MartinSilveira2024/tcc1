<?php
session_start();
$nome_arquivo = $_SESSION['foto_user'];
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Arquivo</title>
</head>

<body>
    <form action="trocar_foto.php" method="post" enctype="multipart/form-data">
        Alterando o arquivo <?= $nome_arquivo ?>:<br>
        <!-- <input type="hidden" name="nome_arquivo"> -->
        <input type="file" name="arquivo"><br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>
