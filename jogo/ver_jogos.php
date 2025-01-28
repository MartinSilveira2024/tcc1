<?php
session_start();
include "../conecta.php";
// if (isset($_SESSION['id_usuario']) == false) {
//   echo "realize o login";
//   die;
// }
$sql = "SELECT * FROM jogos";
$result = mysqli_query($conexao, $sql);
if ($result) {
  $infos = mysqli_fetch_all($result, MYSQLI_ASSOC);
} else {
  echo "erro ao conectar no bd";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="css.css"> -->

  <title>Jogos</title>
</head>

<body>

  <?php include_once "navbar.php"; ?>

  <?php
  include "../conecta.php";
  $sql = "SELECT * FROM jogos";
  $result = mysqli_query($conexao, $sql);
  ?>

  <div class="container">
    <div class="row">
      <?php
      while ($info = mysqli_fetch_assoc($result)) {
        $arq = $info['foto_jogo'];
      ?>
        <div class="col" style="margin-bottom: 20px;">
          <div class="card" style="width: 18rem;">
            <img src='uploads/<?= $arq ?>' width='100%' height='100px' class='card_img'>
            <div class="card-body">
              <h5 class='card_title'><?= $info['nome_jogo'] ?></h5>
              <p class='card-text'><?= $info['empresa_jogo'] ?></p>
              <a href="../forum/listar_foruns.php?id_jogo=<?= $info["id_jogo"] ?>">Entrar</a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>

    <?php if (isset($_SESSION['nivel_acesso']) == 'adm') {
      echo '<a href="cadastrar.php">Cadastrar jogos</a>'; }?>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>