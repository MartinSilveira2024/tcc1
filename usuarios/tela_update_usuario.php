<?php
session_start();
require_once "../conecta.php";
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuarios WHERE id_usuario = '$id'";
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
    <title>Update usuario</title>
</head>

<body>

<?php require_once "../jogo/navbar.php"?>


    <form action="update_usuario.php" method="post">
        <div class="wrapper">
            <div class="container main">
                <div class="row">
                    <div class="col-md-6 side-image">

                    </div>
                    <div class="col-md-6 right">

                        <div class="input-box">

                            <header>Atualizar infos</header>


                            <div class="input-field">
                                <input type="text" class="input" name="nome" value="<?php echo $usuario['nome_user'] ?>" required> <br>
                                <label for="pass">Nome de usuario</label>
                            </div>
                            <div class="input-field">
                                <input type="text" class="input" name="email" value="<?php echo $usuario['email_user'] ?>" required> <br>
                                <label for="pass">Email</label>
                            </div>
                            <div class="input-field">

                            <div class="input-field">
                                <input type="text" class="input" name="senha" value="<?php echo $usuario['senha_user'] ?>" required> <br>
                                <label for="pass">Senha</label>
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
