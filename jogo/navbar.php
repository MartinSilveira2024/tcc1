<?php //var_dump($_SERVER);die;?>
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-bottom: 40px;">
  <a href="<?= $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['HTTP_HOST'] . "/tcc1/jogo/teste_cards.php" ?>"><img src="../logo.png" alt="logo" width="90px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="../jogo/ver_jogos.php">Ver jogos</a>
      </li>
      <?php if (isset($_SESSION['nivel_acesso'])) {
        if (($_SESSION['nivel_acesso']) == 'adm') {
          echo '<li class="nav-item">
        <a class="nav-link" href="../cruds">Ver cruds</a>
      </li>';
        }
      }
      ?>
      <?php
      if (isset($_SESSION['email_user'])) { ?>
        <li class="nav-item">
          <a class="nav-link" href="../usuarios/perfil_usuario.php"><?= $_SESSION['nome_user']; ?></a>
        </li>
      <?php } else {
      ?>
        <li class="nav-item">
          <a class="nav-link" href="../index.php">Entrar</a>
        </li>
      <?php } ?>
      <li class="nav-item">
        <a class="nav-link" href="../usuarios/desconect_usuario.php">Sair</a>
      </li>
    </ul>
  </div>
  <!-- <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form> -->
</nav>