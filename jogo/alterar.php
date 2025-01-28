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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Update jogo</title>
</head>

<body>

<?php require_once "../jogo/navbar.php"?>


    <form action="update_jogo.php" method="post">
        <div class="wrapper">
            <div class="container main">
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
