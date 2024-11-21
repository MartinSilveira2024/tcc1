<?php
require_once "../conecta.php";
session_start();
$id_forum = $_GET['id_forum'];

$sql = "DELETE FROM forum WHERE id_forum=$id_forum";
$result = mysqli_query($connect, $sql);
if ($result) {
    header("Location: ../cruds/crud_forum.php");
} else {
    echo mysqli_errno($connect) . ": " . mysqli_error($connect);
}