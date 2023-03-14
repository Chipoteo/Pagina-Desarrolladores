<!-- Estilos -->
<style>
    .links{
        margin-right: 50px;
    }
    .titulo{
        margin-left: 340px;
    }
    .preview{
        margin-left: 150px;
    }

</style>
<!-- FIN Estilos -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicacion Inventario</title>
    <link rel="stylesheet" href="../../Pagina desarrolladores/bootstrap/css/bootstrap.css">
</head>
<body>

<!-- Menu -->
<nav class="navbar navbar-expand-lg" style="background-color: #362D27">
  <div class="container-fluid">
  <a class="navbar-brand">
      <img src="../img/Logo Will y Rada.png" alt="Bootstrap" width="70" height="65">
    </a>
    <div class="titulo"><a class="navbar-brand text-white">SOCIEDAD ASESORA WILL y RADA</a></div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="links">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="#home">Regresar Principal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#vision">Vision y Mision</a>
        </li>
      </ul>
    </div>
    </div>
  </div>
</nav>
<!-- FIN Menu -->
<br>
<center><h1>APLICACION INVENTARIO</h1></center>
<br><br><br>
<div class="container text-center">
  <div class="row">
    <div class="col">
    <h2>INFORMACION</h2>
    <br>
    <h3>(Cabe aclarar que la aplicacion es un modelo base y que por tanto esta sujeta a cambios)</h3>
    <br>
    <h6 style="text-align: justify;">
        Con esta aplicaion se podra almacenar datos de texto y numeros acerca de los productos 
        que entran y salen dependiendo de las necesidades de cada usuario y su proyecto. <br>
        En la parte derecha se podran ver previews acerca de como luce el proyecto base para
        dar una idea de como esta conformada la aplicacion. Sin embargo a continuacion se adjuntaran
        dos links; uno va a redirigir a la aplicacion en el formato funcional y de prueba, y el
        segundo link descargara el codigo de la aplicacion. 
    </h6>
    <hr>
        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-primary" type="button">Redirigir</button>
            <button class="btn btn-primary" type="button">Descargar</button>
        </div>
    </div>
    <div class="col">
      <h2>PREVIEW</h2>
      <br>
      <div class="preview">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="../img/icono1.png" class="d-block w-100; d-block h-75" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="10000">
      <img src="../img/icono2.png" class="d-block w-100; d-block h-75" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="10000">
      <img src="../img/icono3.png" class="d-block w-100; d-block h-75" alt="...">
    </div>
  </div>
</div>
      </div>
      <hr>
    </div>
  </div>
</div>
</body>
</html>
<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>

<?php

    include('../plantilla/footer.php')

?>