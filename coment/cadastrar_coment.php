<?php

session_start();
$id_forum = $_GET['id_forum'];

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
    <div class="wrapper">
        <div class="container main">
            <div class="row">
                <div class="col-md-6 side-image">

                    <form action="cad_coment.php" method="GET">



                </div>
                <div class="col-md-6 right">

                    <div class="input-box">

                        <header>Comentar</header>

                        <div class="input-field">
                            Comentario:<Textarea type="text" name="coment"> </Textarea> <br><br>
                        </div>
                        <input type="hidden" name="id_forum" value="<?php print $id_forum; ?>">

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