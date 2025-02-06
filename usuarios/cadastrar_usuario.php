<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Cadastro</title>
    <?php
    session_start();
    require_once "../head.php";
    ?>
</head>

<body>

    <form action="cadastro_usuario.php" method="post">
        <div class="wrapper">
            <div class="container main">
                <div class="row">
                    <?= toast() ?>
                    <div class="col-md-6 side-image">

                    </div>
                    <div class="col-md-6 right">

                        <div class="input-box">

                            <header>Cadastro</header>

                            <div class="input-field">
                                <input type="text" class="input" name="nome" required> <br>
                                <label for="pass">Nome de usuário</label>
                            </div>
                            <div class="input-field">
                                <input type="email" class="input" name="email" required> <br>
                                <label for="pass">Email</label>
                            </div>

                            <div class="input-field">
                                <input type="password" class="input" name="senha" required> <br>
                                <label for="pass">Senha</label>
                            </div>

                            <div class="input-field">
                                <input type="password" class="input" name="rep_senha" required> <br>
                                <label for="pass">Repetir senha</label>
                            </div>
                            <div class="input-field">

                                <input type="submit" class="submit" value="Cadastrar-se">
                            </div> <br>

                            <a href="../index.php">Login</a> <br> <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <h3>Esta imagem foi retirada do jogo League of legends que foi criado pela empresa Riot Games</h3>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        toast = document.getElementById('liveToast');
        if (toast != null) {
            bootstrap.Toast.getOrCreateInstance(toast).show();
        }
    </script>
</body>

</html>