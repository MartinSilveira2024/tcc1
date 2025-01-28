<?php
session_start();
$nome_arquivo = $_SESSION['foto_user'];
require_once "../head.php";
head("Cadastro de fórum");
?>

<body>
    <?php include_once "../jogo/navbar.php" ?>

    <div class="container">
        <div class="row">
        <form action="trocar_foto.php" method="post" enctype="multipart/form-data">
                <h3>Trocar foto</h3>
                Alterando o arquivo <?= $nome_arquivo ?>:<br>
                <label class="form-label">Arquivo:
                <input type="file" name="arquivo" required><br>
                </label>
                <br>
                <input type="submit" class="btn btn-primary" value="Alterar">
            </form>
        </div>
    </div>

    <!-- <form action="cadastro_usuario.php" method="post">
        <div class="wrapper">
            <div class="container main">
                <div class="row">
                    <div class="col-md-6 side-image">

                    </div>
                    <div class="col-md-6 right">

                        <div class="input-box">

                            <header>Cadastro</header>

                            <div class="input-field">
                                <input type="text" class="input" name="nome" required> <br>
                                <label for="pass">Nome de usuario</label>
                            </div>
                            <div class="input-field">
                                <input type="text" class="input" name="email" required> <br>
                                <label for="pass">Email</label>
                            </div>
                            <div class="input-field">

                                <div class="input-field">
                                    <input type="password" class="input" name="senha" required> <br>
                                    <label for="pass">Senha</label>
                                </div>
                                <div class="input-field">
                                    <input type="password" class="input" name="rep_senha" required> <br>
                                    <label for="pass">Confirmar senha</label>
                                </div>
                                <div class="input-field">

                                    <input type="submit" class="submit" value="Cadastra-se">
                                </div> <br>
                                <a href="../index.php">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </form> -->
    <?= js(); ?>

</body>

</html>