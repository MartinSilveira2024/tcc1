<?php

session_start();

if (isset($_SESSION['nivel_acesso']) != 'adm') {
  echo "você não é administrador";
  die;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <title>Document</title>
</head>

<body>


  <?php
  include "../conecta.php";
  include_once "../head.php";
  include_once "../jogo/navbar.php";
  $sql = "SELECT * FROM forum";
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
  <?= toast() ?>
    <caption>Listagem de foruns</caption>
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">Titulo</th>
          <th scope="col">Subtitulo</th>
          <th scope="col">Alterar</th>
          <th scope="col">Excluir</th>
        </tr>
      </thead>
      <tbody>
        <?php

        foreach ($infos as $info) {
          echo '<tr>';
          echo '<td>' . $info['titulo'] . '</td>';
          echo '<td>' . $info['subtitulo'] . '</td>';
          echo '<td> <a href="../forum/alterar_forum.php?id_forum=' . $info["id_forum"] . '" class="btn btn-warning"> Alterar </a> </td>';
          echo '<td>  <buttonExcluir type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Excluir</button> </td>';
          echo '</tr>';

          ?> <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tem certeza que deseja excluir</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                Você deseja confirmar a exclusão?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button class="btn btn-danger" onclick="excluir(<?= $info['id_forum'] ?>)">Confirmar</button>
              </div>
            </div>
          </div>
        </div>
      <?php  } ?>

        <script>
          function excluir(id_forum) {
            window.location.href = "excluir_forum.php?id_forum=" + id_forum;
          }
        </script>

      </tbody>
    </table>
  </div>
  <?=js();?>
  <script>
      toast = document.getElementById('liveToast');
        if (toast != null) {
            bootstrap.Toast.getOrCreateInstance(toast).show();
        }
  </script>
</body>

</html>