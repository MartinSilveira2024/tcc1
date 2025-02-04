<?php

session_start();
$id_forum = $_GET['id_forum'];

require_once "../head.php";
head("Cadastrar comentário");
?>
<link rel="stylesheet" href="style.css">
<body>
    <?php include_once "../jogo/navbar.php"; ?>
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
                        <div class="input-field">
                        <input type="submit" class="submit" value="Cadastrar comentário"> <br>
                    </div>
                    <a href="../forum/pag_forum.php?id_forum=<?= $_GET['id_forum'] ?>" class="btn btn-primary">Voltar</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    </form>

    <?= js() ?>

</body>

</html>