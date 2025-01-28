<?php
require_once "../head.php";
head("Cadastro de usuário");
?>

<body>
    <?php include_once "../jogo/navbar.php" ?>
    <style>
        .form-control {
            border: 0.5px solid black;
        }
    </style>
    <div class="container">
        <div class="row">
            <form action="cadastro_usuario.php" method="post">
                <h3>Cadastre-se</h3>
                <label class="form-label">Nome de usuário
                    <input type="text" class="form-control" name="nome" required>
                </label>
                <label class="form-label">Email
                    <input type="email" class="form-control" name="email" required>
                </label>
                <label class="form-label">Senha
                    <input type="password" class="form-control" name="senha" required>
                </label>
                <label class="form-label">Confirmar senha
                    <input type="password" class="form-control" name="rep_senha" required>
                </label>
                <br>
                <input type="submit" class="btn btn-primary" value="Cadastre-se">
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