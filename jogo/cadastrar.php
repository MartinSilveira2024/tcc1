<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cadastro.php" method="post" enctype="multipart/form-data">
    Insira a imagem do forum:<input type="file" name="arquivo"><br> <br>
    Categoria:<input type="text" name="categoria"> <br>
    Titulo:<input type="text" name="titulo"> <br>
    Subtitulo:<input type="text" name="sub"> <br>
    Texto:<input type="text" name="corp_forum"> <br>
    <input type="submit" value="enviar">
    </form>
</body>
</html>