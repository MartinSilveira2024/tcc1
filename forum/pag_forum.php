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
    <style>
        .img {
            border-radius: 50%;
        }
    </style>
    <div class="container bg-white">
        <?= toast() ?>
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
                    <img class='img' width='50px' height='50px' src='../jogo/uploads/<?= $info['foto_user'] ?>'><br><?= $info['nome_user'] ?><br><?= $data ?>
                    <?php if ($_SESSION['id_usuario'] == $info['id_usuario']) { ?>
                        <a href="../coment/alterar.php?id_comentario=<?= $info['id_comentario'] ?>&id_forum=<?= $id_forum ?>" class="btn btn-warning">Editar</a>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Excluir</button>
                    <?php } ?>
                </div>
                <div class="col-9">
                    <?= $info['coment'] ?>
                </div>


            </div>
        <?php } ?>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tem certeza que deseja excluir</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Você deseja confirmar a exclusão?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button class="btn btn-danger" onclick="excluir(<?= $info['id_comentario'] ?>)">Confirmar</button>
                </div>
            </div>
        </div>
    </div>

    <?= js() ?>
    <script>
        function excluir(id_comentario) {
            window.location.href = "../coment/excluir_coment.php?id_comentario=" + id_comentario + "&id_forum=<?= $id_forum ?>";
        }

        toast = document.getElementById('liveToast');
        if (toast != null) {
            bootstrap.Toast.getOrCreateInstance(toast).show();
        }
    </script>
</body>

</html>