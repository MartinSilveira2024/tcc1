<?php
$id_categoria = $_GET['id_categoria'];

/*if (isset($_SESSION['usuario']) == false) {
  echo "realize o login";
  die;
} */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>Escolha a categoria!</h2>

    <?php
    include "conecta.php";
    $sql = "SELECT * FROM jogos WHERE id_categoria = $id_categoria";
    $result = mysqli_query($connect, $sql);
    
    ?>

<table>
<thead>
    <tr>
        <th>Jogos</th>
        <th>Quantidade de fóruns</th>
    </tr>
</thead>
<tbody>
    <?php 

        while($info = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . $info['nome_jogo'] ;
            echo '<td>' . $info['quant_forum_jogo']. '</td> <br><br>';
            echo '<td> <a href="categorias.php"> Entrar </a>';
            echo '</tr>';
            
            if ($info['quant_forum_jogo'] == 0) {
                echo "não tem jogos cadastrados nessa categoria";
            }
        }

    ?>
</tbody>
</table>
</body>
</html>