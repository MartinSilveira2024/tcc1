<?php
session_start();
require_once "../conecta.php";
$id = $_GET['id_forum'];
$sql = "SELECT * FROM forum WHERE id_forum = '$id'";
$result = mysqli_query($conexao, $sql);
if ($result) {
    $usuario = mysqli_fetch_assoc($result);
} else {
    echo mysqli_errno($conexao) . ": " . mysqli_error($conexao);
    die();
}

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Update Forum</title>
</head>

<body>

    <?php require_once "../jogo/navbar.php";
      include_once "../head.php";?>


    <form action="alterar_crud_forum.php" method="post">
        <div class="wrapper">
            <div class="container main">
            <?= toast() ?>
                <div class="row">
                    <div class="col-md-6 side-image">

                    </div>
                    <div class="col-md-6 right">
                        <input type="hidden" name="id_forum" value="<?= $_GET['id_forum'] ?>">

                        <div class="input-box">


                            <header>Alterar fórum</header>


                            <div class="input-field">
                                <input type="text" class="input" name="titulo" value="<?php echo $usuario['titulo'] ?>" required> <br>
                                <label for="pass">Titulo</label>
                            </div>
                            <div class="input-field">
                                <input type="text" class="input" name="subtitulo" value="<?php echo $usuario['subtitulo'] ?>" required> <br>
                                <label for="pass">Subtitulo</label>
                            </div>
                            <div class="input-field">
                                <div class="input-field">
                                    <textarea class="form-control" name="corpo_texto"><?php echo $usuario['corpo_texto'] ?></textarea> <br>
                                </div>

                                <input type="submit" class="submit" value="Atualizar"> <br>
                            </div>
                            <a href="listar_foruns.php?id_jogo=<?= $usuario['id_jogo'] ?>" class="btn btn-primary">Voltar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
    <?= js(); ?>
  <script>
    toast = document.getElementById('liveToast');
    if (toast != null) {
      bootstrap.Toast.getOrCreateInstance(toast).show();
    }
  </script>
</body>
<h3>Esta imagem foi retirada do jogo League of legends que foi criado pela empresa Riot Games</h3>

</html>