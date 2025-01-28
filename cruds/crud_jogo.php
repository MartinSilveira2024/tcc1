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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Document</title>
  <!-- <link rel="stylesheet" href="../styles.css"> -->
</head>

<body>


  <?php
  include "../conecta.php";
  include_once "../jogo/navbar.php";
  $sql = "SELECT * FROM jogos";
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
    <caption>Listagem de jogos</caption>
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">Nome</th>
          <th scope="col">Empresa</th>
          <th scope="col">Excluir</th>
          <th scope="col">Alterar</th>
        </tr>
      </thead>
      <tbody>
        <?php

        foreach ($infos as $info) {
          echo '<tr>';
          echo '<td>' . $info['nome_jogo'] . '</td>';
          echo '<td>' . $info['empresa_jogo'] . '</td>';
          echo '<td>  <buttonExcluir type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Excluir</button> </td>';
          echo '<td> <a href="../jogo/alterar.php?id_jogo=' . $info["id_jogo"] . '"> Editar </a> </td>';
          echo '</tr>';
        }

        ?>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
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
                <button class="btn btn-danger" onclick="excluir(<?= $info['id_jogo'] ?>)">Confirmar</button>
              </div>
            </div>
          </div>
        </div>
        <script>
          function excluir(id_jogo) {
            window.location.href = "excluir_jogo.php?id_jogo=" + id_jogo;
          }
        </script>

      </tbody>
    </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>