<?php
session_start();
require_once "../conecta.php";
$id = $_GET['id_comentario'];
$sql = "SELECT * FROM comentarios WHERE id_comentario = '$id'";
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
    <title>Update Comentário</title>
</head>

<body>

<?php require_once "../jogo/navbar.php"?>


    <form action="update_coment.php" method="post">
        <div class="wrapper">
            <div class="container main">
                <div class="row">
                    <div class="col-md-6 side-image">

                    </div>
                    <div class="col-md-6 right">
                    <input type="hidden" name="id_comentario" value="<?= $_GET['id_comentario'] ?>">

                        <div class="input-box">
                        <input type="hidden" name="id_forum" value="<?= $_GET['id_forum'] ?>">
                            <header>Alterar comentário</header>


                            <div class="input-field">
                                <input type="text" class="input" name="coment" value="<?php echo $usuario['coment'] ?>" required> <br>
                                <label for="pass">Comentário</label>
                            </div>

                                    <input type="submit" class="submit" value="Atualizar">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
<h3>Esta imagem foi retirada do jogo League of legends que foi criado pela empresa Riot Games</h3>
</html>
