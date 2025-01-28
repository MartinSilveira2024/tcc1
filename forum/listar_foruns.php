<?php

session_start();
$id_jogo = $_GET['id_jogo'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Document</title>
  <!-- <link rel="stylesheet" href="../styles.css"> -->
</head>

<body>


  <?php
  include "../conecta.php";
  include_once "../jogo/navbar.php";
  $sql = "SELECT * FROM forum WHERE id_jogo = $id_jogo";
  $result = mysqli_query($conexao, $sql);
  if ($result) {
    $infos = mysqli_fetch_all($result, MYSQLI_ASSOC);
  } else {
    echo "erro ao conectar no bd";
    /* fazer um quadrado branco transparente pra diferenciar conteudo de imagem */
  }
  ?>
  <br>
  <div class="container">
    <caption>Listagem de foruns</caption>
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">Titulo</th>
          <th scope="col">Subtitulo</th>
          <th scope="col">Opções</th>
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
    </table>
    <a href="cad_forum.php?id_jogo=<?= $info["id_jogo"] ?>">Deseja criar um forum sobre esse jogo? Clique aqui</a>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>