<?php
$pastaDestino = "/uploads/";
$nome = $_POST['titulo'];
$sub = $_POST['sub'];
// verificar se o tamanho do arquivo é maior que 2 MB

// verificar se o arquivo é uma imagem
$extensao = strtolower(pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION));

if (
    $extensao != "png" && $extensao != "jpg" &&
    $extensao != "jpeg" && $extensao != "gif" &&
    $extensao != "jfif" && $extensao != "svg"
) { // condição de guarda 👮
    echo "O arquivo não é uma imagem! Apenas selecione arquivos 
    com extensão png, jpg, jpeg, gif, jfif ou svg.";
    die();
}

// verificar se é uma imagem de fato
if (getimagesize($_FILES['arquivo']['tmp_name']) === false) {
    echo "Problemas ao enviar a imagem. Tente novamente.";
    die();
}

$nomeArquivo = uniqid();

// se deu tudo certo até aqui, faz o upload
$fezUpload = move_uploaded_file(
    $_FILES['arquivo']['tmp_name'], __DIR__. $pastaDestino . $nomeArquivo . "." . $extensao
);
    $conexao = mysqli_connect("localhost", "root", "", "tcc");
    $sql = "INSERT INTO jogos (nome_jogo, empresa_jogo, foto_jogo) VALUES ('$nome','$sub','$nomeArquivo.$extensao')";
    $resultado = mysqli_query($conexao, $sql);
    if ($resultado != false) {
        // se for uma alteração de arquivo
        if (isset($_POST['arquivo'])) {
            $apagou = unlink(__DIR__ . $pastaDestino . $_POST['nome_arquivo']);
            if ($apagou == true) {
                $sql = "DELETE FROM jogos WHERE nome_arquivo='" 
                        . $_POST['arquivo'] . "'";
                $resultado2 = mysqli_query($conexao, $sql);
                if ($resultado2 == false) {
                    echo "Erro ao apagar o arquivo do banco de dados.";
                    die();
                }
            }
        }
        header("Location: index.php");
    } 