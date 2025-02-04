<?php
session_start();
require_once "../conecta.php";
$id = $_GET['id_jogo'];
$sql = "SELECT * FROM jogos WHERE id_jogo = '$id'";
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
    <title>Update jogo</title>
</head>

<body>

    <?php require_once "../jogo/navbar.php";
    include_once "../head.php"; ?>


    <form action="update_jogo_crud.php" method="post">
        <div class="wrapper">
            <div class="container main">
                <?= toast() ?>
                <div class="row">
                    <div class="col-md-6 side-image">

                    </div>
                    <div class="col-md-6 right">
                        <input type="hidden" name="id_jogo" value="<?= $_GET['id_jogo'] ?>">

                        <div class="input-box">

                            <header>Atualizar infos</header>


                            <div class="input-field">
                                <input type="text" class="input" name="nome_jogo" value="<?php echo $usuario['nome_jogo'] ?>" required> <br>
                                <label for="pass">Nome do jogo</label>
                            </div>
                            <div class="input-field">
                                <input type="text" class="input" name="empresa_jogo" value="<?php echo $usuario['empresa_jogo'] ?>" required> <br>
                                <label for="pass">Empresa do jogo</label>
                            </div>
                            <div class="input-field">


                                <input type="submit" class="submit" value="Atualizar"> <br>
                            </div>

                            <a href="../cruds/crud_jogo.php?id_jogo=<?= $_GET['id_jogo'] ?>" class="btn btn-primary">Voltar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?= js(); ?>
        <script>
            toast = document.getElementById('liveToast');
            if (toast != null) {
                bootstrap.Toast.getOrCreateInstance(toast).show();
            }
        </script>
    </form>
</body>
<h3>Esta imagem foi retirada do jogo League of legends que foi criado pela empresa Riot Games</h3>

</html>