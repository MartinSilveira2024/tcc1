<?php
session_start();
$id_user = $_SESSION['id_usuario'];
$pastaDestino = "../jogo/uploads/";
// verificar se o tamanho do arquivo é maior que 2 MB
if ($_FILES['arquivo']['size'] > 2000000) {  // condição de guarda 👮
    echo "O tamanho do arquivo é maior que o limite permitido. Limite máximo: 2 MB.";
    die();
}

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
$fezUpload = move_uploaded_file($_FILES['arquivo']['tmp_name'], realpath(__DIR__ . '/' . $pastaDestino) . '/' . $nomeArquivo . "." . $extensao);

if ($fezUpload == true) {
    require_once "../conecta.php";
    $sql =  "UPDATE usuarios SET foto_user='$nomeArquivo' WHERE id_usuario = $id_user";
    $resultado = mysqli_query($conexao, $sql);
    if ($resultado != false) {
        header("Location: perfil_usuario.php");
    } else {
        echo "Erro ao registrar o arquivo no banco de dados.";
    }
} else {
    echo "Erro ao mover arquivo.";
}
