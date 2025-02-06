<?php
session_start();
require_once "../conecta.php";
$id = $_GET['id_categoria'];
$sql = "SELECT * FROM categorias WHERE id_categoria = '$id'";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Update Categoria</title>
</head>

<body>

<?php require_once "../jogo/navbar.php";
include_once "../head.php"; ?>


    <form action="update_categoria.php" method="post">
        <div class="wrapper">
            <div class="container main">
            <?= toast() ?>
                <div class="row">
                    <div class="col-md-6 side-image">

                    </div>
                    <div class="col-md-6 right">
                    <input type="hidden" name="id_categoria" value="<?= $_GET['id_categoria'] ?>">

                        <div class="input-box">

                            <header>Alterar categoria</header>


                            <div class="input-field">
                                <input type="text" class="input" name="nome_categoria" value="<?php echo $usuario['nome_categoria'] ?>" required> <br>
                                <label for="pass">Titulo</label>
                            </div>
                            <div class="input-field">
                                    <input type="submit" class="submit" value="Atualizar"> <br>
                                </div>
                                <a href="../cruds/crud_categorias.php" class="btn btn-primary">Voltar</a>
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
