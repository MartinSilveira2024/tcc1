<?php /*
session_start();
include "../conecta.php";
if (isset($_SESSION['id_usuario']) == false) {
    echo "realize o login";
    die;
}
include "../conecta.php";
$sql = "SELECT * FROM categorias";
$result = mysqli_query($connect, $sql);
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cad.css">
    <title>Document</title>
</head>

<body>

    <form action="cadastro.php" method="post" enctype="multipart/form-data">
        <h1 id="h1">Cadastre o jogo</h1>
        <div id="form-container">
            Insira a imagem do jogo:<input type="file" name="arquivo"><br> <br>

            <?php
            echo '<label for="cars">Insira a categoria do jogo:</label>';
            echo '<select name="id_categoria" id="cars">';
            foreach ($infos as $info) {
                echo '<option value=' . $info["id_categoria"] . '>' . $info['nome_categoria'] . '</option> ';
            }
            echo '</select> <br>';
            ?>
            Nome do jogo:<input type="text" name="titulo"> <br>
            Empresa do jogo:<input type="text" name="sub"> <br>
            <input type="submit" value="Enviar">
    </form>
    </div>
</body>

</html>
*/ ?>
<?php
session_start();
include "../conecta.php";
if (isset($_SESSION['id_usuario']) == false) {
    echo "realize o login";
    die;
}
include "../conecta.php";
$sql = "SELECT * FROM categorias";
$result = mysqli_query($connect, $sql);
if ($result) {
    $infos = mysqli_fetch_all($result, MYSQLI_ASSOC);
} else {
    echo "erro ao conectar no bd";
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>

    <form action="cadastro.php" method="post" enctype="multipart/form-data">
        <div class="wrapper">
            <div class="container main">
                <div class="row">
                    <div class="col-md-6 side-image">




                    </div>
                    <div class="col-md-6 right">

                        <div class="input-box">

                            <header>Inserir jogo</header>
                            Insira a imagem do jogo:<input type="file" name="arquivo"><br> <br>
                            <?php
                            echo '<label for="cars">Insira a categoria do jogo:</label>';
                            echo '<select name="id_categoria" id="cars">';
                            foreach ($infos as $info) {
                                echo '<option value=' . $info["id_categoria"] . '>' . $info['nome_categoria'] . '</option> ';
                            }
                            echo '</select> <br> <br>';
                            ?>
                            <div class="input-field">
                                <input type="text" class="input" name="titulo" required> <br>
                                <label for="pass">Nome do jogo</label>
                            </div>
                            <div class="input-field">
                                <input type="text" class="input" name="sub" required> <br>
                                <label for="pass">Empresa do jogo</label>
                            </div>
                            <div class="input-field">
                                <div class="input-field">
                                    <input type="submit" class="submit" value="Inserir jogo">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>