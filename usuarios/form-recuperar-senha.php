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


    <form action="recuperar.php" method="post">
        <div class="wrapper">
            <div class="container main">
                <div class="row">
                    <div class="col-md-6 side-image">

                    </div>
                    <div class="col-md-6 right">

                        <div class="input-box">

                            <header> Digite o seu email para que você possa criar uma nova senha.<br>
    Será enviado um email com um link de recuperação que você
    usará para criar uma nova senha.<br></header>


                            <div class="input-field">
                                <input type="email" class="input" name="email" required> <br>
                                <label for="pass">Recuperar senha</label>
                            </div>

                                    <input type="submit" class="submit" value="Enviar">
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
