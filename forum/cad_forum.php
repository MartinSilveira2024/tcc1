<?php 
    include "../conecta.php";
    $sql = "SELECT * FROM jogos";
    $result = mysqli_query($connect, $sql);
    if($result) {
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

    <form action="cadastrar_forum.php" method="post">
        <div class="wrapper">
            <div class="container main">
                <div class="row">
                    <div class="col-md-6 side-image">




                    </div>
                    <div class="col-md-6 right">

                        <div class="input-box">

                            <header>Criar Forum</header>

                            <?php
                            echo '<label for="cars">Insira o jogo do forum:</label>';
                            echo '<select name="id_jogo" id="cars">';
                            foreach ($infos as $info) {
                                echo ' <option value=' .  $info["id_jogo"] . '>' .  $info['nome_jogo'] . '</option> ';
                            }

                            echo '</select> <br> <br>';
                            ?>
                            <div class="input-field">
                                <input type="text" class="input" name="titulo" required> <br>
                                <label for="pass">Titulo</label>
                            </div>
                            <div class="input-field">
                                <input type="text" class="input" name="subtitulo" required> <br>
                                <label for="pass">Subtitulo</label>
                            </div>
                            <div class="input-field">

                                <div class="input-field">
                                    <Textarea name="corpo_texto" required> </Textarea> <br>
                                </div>
                                <div class="input-field">

                                    <input type="submit" class="submit" value="Criar Forum">
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