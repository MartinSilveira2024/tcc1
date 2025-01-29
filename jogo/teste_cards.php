<?php
session_start();
include "../conecta.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="css.css">
  <style>
  
  #mainSlider .carousel-caption h2{
    font-size: 28px;
}

#mainSlider .carousel-caption p{
    font-size: 18px;
    margin-bottom: 40px;
}

.carousel-caption{
    left: 10%;
    right: 10%;
}

</style>
  <title>Jogos</title>
</head>

<body>

<?php include_once "navbar.php"; ?>
 <main style="margin-top: 5%;" class="container ">


        <div id="mainSlider" class="carousel slide" data-bs-ride="carousel">

            <ol class="carousel-indicators">
                <button type="button" data-bs-target="#mainSlider" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#mainSlider" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#mainSlider" data-bs-slide-to="2"></button>
            </ol>

            <div class="carousel-inner w-100 center-block">
                <div class="carousel-item active">

                    <!--banner1-->
                    <img src="shaco.jpg" class=" w-100" alt="fotos da igreja">
                    <div class="carousel-caption d-md-block">
                        <h2>Por que usar o Supreme Forum Games?</h2>
                        <p></p>
                        <p>Rápido, prático e simples</p>
                    </div>
                </div>


                <!--banner2-->
                <div class="carousel-item  ">
                    <img src="fizz.jpg" class="w-100" alt="fotos da igreja">
                    <div class="carousel-caption  d-md-block">
                        <h2>Usabilidade excelente</h2>
                        <p></p>
                        <p>Fácil usar e aprender</p>
                    </div>
                </div>


                <!--banner3-->
                <div class="carousel-item  ">
                    <img src="gangplank.png" class=" w-100" alt="Manutenção de Software">
                    <div class="carousel-caption  d-md-block">
                        <h2>Ache e crie foruns dos jogos que quiser</h2>
                        <p></p>
                        <p>Se cadastre e crie foruns personalizados</p>
                    </div>
                </div>
            </div>


            <a href="#mainSlider" class="carousel-control-prev" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a href="#mainSlider" class="carousel-control-next" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
        </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>


