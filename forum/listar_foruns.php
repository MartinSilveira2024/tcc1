<?php

session_start();
$id_jogo = $_GET['id_jogo'];
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
    <link rel="stylesheet" href="../styles.css">
</head>

<body>


    <?php
    include "../conecta.php";
    $sql = "SELECT * FROM forum WHERE id_jogo = $id_jogo";
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
            <caption>Listagem de foruns</caption>
            <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Subtitulo</th>
                    <th>Opções</th>
                </tr>
            </thead>
            <tbody>
                <?php

                foreach ($infos as $info) {
                    echo '<tr>';
                    echo '<td>' . $info['titulo'] . '</td>';
                    echo '<td>' . $info['subtitulo'] . '</td>';
                    echo '<td> <a href="pag_forum.php?id_forum=' . $info["id_forum"] . '"> Entrar </a> </td>';
                    echo '</tr>';
                }

                ?>
            </tbody>
    </div>
    </table>
</body>

</html>