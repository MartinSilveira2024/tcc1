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
<!-- <img src="logo.png" class="login__logo"> -->
    <form action="./usuarios/nivel_acesso.php" method="post">
        <div class="wrapper">
            <div class="container main">
                <div class="row">
                    <div class="col-md-6 side-image">

                    </div>
                    <div class="col-md-6 right">

                        <div class="input-box">

                            <header>Login</header>

                            <div class="input-field">
                                <input type="text" class="input" name="email" required> <br>
                                <label for="pass">Email</label>
                            </div>
                            <div class="input-field">
                                <input type="password" class="input" name="senha" required> <br>
                                <label for="pass">Senha</label>
                            </div>
                            <div class="input-field">

                                    <input type="submit" class="submit" value="Entrar">
                                </div> <br>
                                <a href="./usuarios/cadastrar_usuario.php">Cadastro</a> <br> <br>
                                <a href="./usuarios/form-recuperar-senha.php">Recuperar senha</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </form>
    <h3>Esta imagem foi retirada do jogo League of legends que foi criado pela empresa Riot Games</h3>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
