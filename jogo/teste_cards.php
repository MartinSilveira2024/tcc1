<?php 
    include "../conecta.php";
    $sql = "SELECT * FROM jogos";
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
      <link rel="stylesheet" href="css.css">

      <title>Jogos</title>
   </head>
   <body>

   <?php
    include "../conecta.php";
    $sql = "SELECT * FROM jogos";
    $result = mysqli_query($connect, $sql);
    
    ?>
    <?php 

        while($info = mysqli_fetch_assoc($result)) {
         $arq = $info['foto_jogo'];
         echo "<div class='container'>";
         echo "<div class='container_card'>";
         echo  "<article class='article_card'>";
         echo "<img src='uploads/$arq' width='100px' height='100px' class='card_img'>";
         echo   "<div class='card_data'>";
         echo   "<span class='card_title'>" . $info['nome_jogo'] . "</span>";
         echo   "<h2 class='description_card'>" . $info['empresa_jogo'] . "</h2>";
         echo   '<a href="../forum/listar_foruns.php?id_jogo=' . $info["id_jogo"] . '"> Entrar </a>';
         echo   '<a href="excluir_jogo.php?id_jogo=' . $info["id_jogo"] . '"> Excluir Jogo </a>';
         echo   "</div>";
         echo   "</article>";
        }

    ?>
   </body>
</html>