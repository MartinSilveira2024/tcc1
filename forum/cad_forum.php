<?php
include "../conecta.php";
session_start();
if (isset($_SESSION['id_usuario']) == false) {
    echo "realize o login";
    die;
}
$sql = "SELECT * FROM jogos";
$result = mysqli_query($conexao, $sql);
if ($result) {
    $infos = mysqli_fetch_all($result, MYSQLI_ASSOC);
} else {
    echo "erro ao conectar no bd";
}

require_once "../head.php";
head("Cadastro de fórum");
?>

<body>

<style>
        .form-control {
            border: 0.5px solid black;
        }
    </style>
    <?php include_once "../jogo/navbar.php"; ?>

    <div class="container">
        <div class="row">
            <form action="cadastrar_forum.php" method="post">
                <input type="hidden" name="id_jogo" value="<?= $_GET['id_jogo'] ?>">
                <h3>Criar Fórum</h3>
                <label class="form-label">Título do fórum
                    <input type="text" class="form-control" name="titulo">
                </label>
                <label class="form-label">Subtítulo do fórum
                    <input type="text" class="form-control" name="subtitulo">
                </label>
                <div class="form-floating">
                    <textarea class="form-control" id="floatingTextarea2" style="height: 100px" name="corpo_texto"></textarea>
                    <label for="floatingTextarea2">Texto</label>
                </div>
                <br>
                <input type="submit" class="btn btn-primary" value="Criar Fórum">
                <a href="listar_foruns.php?id_jogo=<?= $_GET['id_jogo'] ?>" class="btn btn-primary">Voltar</a>
            </form>
        </div>
    </div>

    <!-- <form action="cadastrar_forum.php" method="post">
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
    </form> -->
    <?= js(); ?>

</body>

</html>