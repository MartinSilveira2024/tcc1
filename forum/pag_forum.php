<?php

session_start();
include "../conecta.php";


$id_forum = $_GET['id_forum'];
$id = $_SESSION['id_usuario'];
$sql2 = "SELECT * FROM usuarios WHERE id_usuario = $id";
$result = mysqli_query($conexao, $sql2);
if ($result) {
    $infor = mysqli_fetch_assoc($result);
} else {
    echo "erro ao conectar no bd";
}
// var_dump($_SESSION['id_usuario']);
// var_dump($id); die;
include_once "../jogo/navbar.php";
$sql = "SELECT * FROM forum WHERE id_forum = $id_forum";
$result = mysqli_query($conexao, $sql);
if ($result) {
    $info = mysqli_fetch_assoc($result);
} else {
    echo "erro ao conectar no bd";
}



include_once "../head.php";
head("Fórum do Jogo " . $info['titulo']);
?>

<body class="bg-body-secondary">

    <div class="container bg-white">
        <div class="row">
            <?php
            echo '<h1> Titulo: ' . $info['titulo'] . "</h1> <br><br> ";
            echo '<hr>';
            echo '<h3>Subtitulo: ' . $info['subtitulo'] . "</h3> <br> <br>";
            echo $info['corpo_texto'] . " <br><br>";

            echo "<hr>";
            echo '<a href="../coment/cadastrar_coment.php?id_forum=' . $info["id_forum"] . '">Comentar sobre o forum</a> <br>';

            ?>
            <br>
        </div>
        Comentários sobre o fórum:
        <br><br>
        <?php
        $sql = "SELECT * FROM comentarios INNER JOIN usuarios ON usuarios.id_usuario = comentarios.id_usuario WHERE id_forum = $id_forum ORDER BY data_comment";
        $result = mysqli_query($conexao, $sql);
        if ($result) {
            $infos = mysqli_fetch_all($result, MYSQLI_ASSOC);
        } else {
            echo "erro ao conectar no bd";
        }

        $i = 0;
        foreach ($infos as $info) {
            $i++;
            $data = DateTime::createFromFormat('Y-m-d H:i:s', $info['data_comment'])->format('d/m/Y H:i:s');
            //echo "<img width='50px' height='50px' src='../jogo/uploads/" . $info['foto_user'] . "'>" . $info['coment'] . $data . "<br><br>";
        ?>
            <div class="row mb-5 <?= ($i % 2 == 0) ? "bg-light-subtle" : "bg-body-tertiary" ?>">
                <div class="col-3">
                    <img width='50px' height='50px' src='../jogo/uploads/<?= $info['foto_user'] ?>'><br><?= $info['nome_user'] ?><br><?= $data ?>
                </div>
                <div class="col-9">
                    <?= $info['coment'] ?>
                </div>

                <?php if ($_SESSION['id_usuario'] == $info['id_usuario']) { ?>
                    <a href="../coment/alterar.php?id_comentario=<?= $info['id_comentario'] ?>">Editar</a>
                <?php } ?>

            </div>
        <?php } ?>
    </div>
    <?= js() ?>

</body>

</html>