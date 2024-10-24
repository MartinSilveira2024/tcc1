<?php 

session_start();
$id_forum = $_GET['id_forum'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="cad_coment.php" method="GET">

    Comentario:<input type="text" name="coment"> <br><br>
        <input type="submit" name= "btn" value="Enviar"> <br>
        <input type="hidden" name="id_forum" value="<?php print $id_forum; ?>">

    </form>

</body>

</html>