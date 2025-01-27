<?php

session_start();
$id_forum = $_GET['id_forum'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    include "../conecta.php";
    $sql = "SELECT * FROM forum WHERE id_forum = $id_forum";
    $result = mysqli_query($conexao, $sql);
    if ($result) {
        $infos = mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        echo "erro ao conectar no bd";
    }
    ?>

    <?php

    foreach ($infos as $info) {
        echo 'Titulo: ' . $info['titulo'] . "<br><br>";
        echo 'Subtitulo: ' . $info['subtitulo'] . "<br><br>";
        echo 'Texto: ' . $info['corpo_texto'] . " <br><br>";
    }


    echo '<td> <a href="../coment/cadastrar_coment.php?id_forum=' . $info["id_forum"] . '"> Comentar sobre o forum </a> </td>';

    echo "<hr>";
    echo "<br>";

    echo "Comentarios sobre o forum:";
    echo "<br>";
    echo "<br>";


    $sql = "SELECT * FROM comentarios INNER JOIN usuarios ON usuarios.id_usuario = comentarios.id_usuario WHERE id_forum = $id_forum";
    $result = mysqli_query($conexao, $sql);
    if ($result) {
        $infos = mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        echo "erro ao conectar no bd";
    }

    foreach ($infos as $info) {
        $data = DateTime::createFromFormat('Y-m-d H:i:s', $info['data_comment'])->format('d/m/Y H:i:s');
        echo "<img src='../jogo/uploads/".$info['foto_user']."'>" . $info['coment'] . $data . "<br><br>";
    }
    ?>
</body>

</html>