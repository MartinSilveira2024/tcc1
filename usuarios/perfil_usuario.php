<?php
session_start();
if (isset($_SESSION['id_usuario']) == false) {
  echo"realize o login";
  die;
 }
 $id_usuario = $_SESSION['id_usuario'];
 include "../conecta.php";
 $sql = "SELECT * FROM usuarios WHERE id_usuario = $id_usuario";
$result = mysqli_query($conexao, $sql);
if ($result) {
  $infos = mysqli_fetch_assoc($result);
} else {
  echo "erro ao conectar no bd";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="style2.css"> -->
    <title>Document</title>
</head>

<body>
<?php require_once "../jogo/navbar.php";
include_once "../head.php";?>

    <section class="vh-100" style="background-color: #f4f5f7;">
        <div class="container py-5 h-100">
        <?= toast() ?>
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-6 mb-4 mb-lg-0">
                    <div class="card mb-3" style="border-radius: .5rem;">
                        <div class="row g-0">
                            <div class="col-md-4 gradient-custom text-center text-white"
                                style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                                <img src="../jogo/uploads/<?php echo $infos['foto_user']; ?>"
                                    alt="Avatar" class="img-fluid my-5" style="width: 170px; border-radius: 100px" />
                                  <a href="form_trocar_foto.php">Trocar foto de perfil</a> 
                                <i class="far fa-edit mb-5"></i>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body p-4">
                                    <h6>Informações </h6>
                                    <hr class="mt-0 mb-4">
                                    <div class="row pt-1">
                                        <div class="col-6 mb-3">
                                            <h6>Email</h6>
                                            <p class="text-muted"><?php echo $infos['email_user']; ?></p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>Nome de usuário</s></h6>
                                            <p class="text-muted"><?php echo $infos['nome_user']; ?></p>
                                        </div>
                                    </div>
                                    <hr class="mt-0 mb-4">
                                    <div class="row pt-1">
                                        <div class="col-6 mb-3">
                                            <a href="excluir_usuario.php">Excluir perfil</a>
                                        </div>
                                        <div class="col-6 mb-3">
                                        <a href="tela_update_usuario.php">Editar perfil</a>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start">
                                        <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                                        <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                                        <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?= js(); ?>
        <script>
            toast = document.getElementById('liveToast');
            if (toast != null) {
                bootstrap.Toast.getOrCreateInstance(toast).show();
            }
        </script>
</body>

</html>