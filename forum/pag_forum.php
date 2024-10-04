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
    $result = mysqli_query($connect, $sql);
    if($result) {
        $infos = mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        echo "erro ao conectar no bd";
    }
    ?>

    <?php 

        foreach($infos as $info) {
            echo $info['titulo']. "<br><br>";
            echo $info['subtitulo']. "<br><br>";
            echo $info['corpo_texto']." <br><br>";
        }

    ?>
</body>
</html>