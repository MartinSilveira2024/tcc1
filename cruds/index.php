<?php

session_start();
if (isset($_SESSION['nivel_acesso']) != 'adm') {
    echo "Você não é administrador";
    die;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="../styles.css"> -->
</head>

<body>


    <?php
    include "../conecta.php";
    include_once "../jogo/navbar.php";
    ?>
    <br>
    <div class="container">
        <caption>Listagem de Cruds</caption>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Crud</th>
                    <th scope="col">Opções</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> Usuários</td>
                    <td> <a href="crud_usuario"> Entrar </a></td>
                </tr>
                <tr>
                    <td>Jogos</td>
                    <td> <a href="crud_jogo"> Entrar </a></td>
                </tr>
                <tr>
                    <td>Fóruns </td>
                    <td> <a href="crud_forum"> Entrar </a></td>
                </tr>
                <tr>
                    <td>Categorias </td>
                    <td> <a href="crud_categorias"> Entrar </a></td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>