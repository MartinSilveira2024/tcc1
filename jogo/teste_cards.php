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
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <link rel="stylesheet" href="css.css">

      <title>Jogos</title>
   </head>
   <body>

   <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
   Opções
</a>

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menu de opçõpes</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div>
      <a href="../usuarios/perfil_usuario.php">Ver Perfil</a>
    </div>
  </div>
</div>

















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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

   </body>
</html>