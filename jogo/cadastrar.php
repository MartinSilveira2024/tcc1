<?php 
    include "conecta.php";
    $sql = "SELECT * FROM categorias";
    $result = mysqli_query($connect, $sql);
    if($result) {
        $infos = mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        echo "erro ao conectar no bd";
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cad.css">
    <title>Document</title>
</head>
<body>

    <form action="cadastro.php" method="post" enctype="multipart/form-data">
    <h1 id="h1">Cadastre o jogo</h1>
    <div id="form-container">
    Insira a imagem do jogo:<input type="file" name="arquivo"><br> <br>

    <?php
    echo '<label for="cars">Insira a categoria do jogo:</label>';
    echo '<select name="id_categoria" id="cars">';
foreach ($infos as $info) {
    echo '<option value='. $info["id_categoria"] .'>'. $info['nome_categoria'] .'</option> ';
}
    echo '</select> <br>';
?>
    Nome do jogo:<input type="text" name="titulo"> <br>
    Empresa do jogo:<input type="text" name="sub"> <br>
    <input type="submit" value="Enviar">
    </form>
    </div>
</body>
</html>