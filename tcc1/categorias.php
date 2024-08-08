<?php

session_start();

/*(isset($_SESSION['usuario']) == false) {
  echo"realize o login";
 }
  die; */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>


    <?php
    include "conecta.php";
    $sql = "SELECT * FROM categorias";
    $result = mysqli_query($connect, $sql);
    if ($result) {
        $infos = mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        echo "erro ao conectar no bd";
        /* fazer um quadrado branco transparente pra diferenciar conteudo de imagem */
    }
    ?>
    <ul id="menu">
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Sobre</a></li>
        <li><a href="#">O que procura?</a></li>
        <li><a href="#">Links</a></li>
        <li><a href="#">Contato</a></li>
    </ul>

    <div id="container">
        <table id="table">
            <caption>Listagem de categorias</caption>
            <thead>
                <tr>
                    <th>Categoria</th>
                    <th>Quantidade de jogos</th>
                    <th>Opções</th>
                </tr>
            </thead>
            <tbody>
                <?php

                foreach ($infos as $info) {
                    echo '<tr>';
                    echo '<td>' . $info['nome_categoria'] . '</td>';
                    echo '<td>' . $info['quant_jogos'] . '</td>';
                    echo '<td> <a href="jogos.php?id_categoria=' . $info["id_categoria"] . '"> Entrar </a> </td>';
                    echo '</tr>';
                }

                ?>
            </tbody>
    </div>
    </table>
</body>

</html>