<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerca de Nosotros</title>
     <!--bootstrap-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!--iconos-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"
    />
    <link rel="stylesheet" href="css/estiloacd.css" />
</head>
<body>
    <!--Navbar-->
    @include('layouts.partials.navbar')

<!--Acerca de-->
<div class="container-fluid text-white  " style="background-image:url('img/topic.png'); background-size:cover; height:200px; vertical-align: middle;">
  <h1 >ACERCA DE NOSOTROS</h1>
</div>
<!--Quienes Somos-->

<div class="container my-5" >
  <!--Titulo-->
  <div class="row">
    <h2>Quienes somos</h2>
    <div class="col-md">
          <hr class="line">
          <p class="parra">Alguna vez te has visto en la necesidad de buscar a una persona que pueda reparar o 
          realizar algún otro servicio pero no cuentas con un número de teléfono o no tienes referencia alguna de los trabajos 
          que realiza esa persona que te recomendaron. ¡Multitrabajos HN está para ayudarte! Contamos con un directorio de personas cuyos servicios pueden ser lo que estés buscando, 
          desde alguien que pueda reparar tu lavadora hasta una persona que pueda maquillarte para ese evento importante.</p>
    </div>
    <div class="col-md">
      <img class="img-fluid" src="img/LOGO-exp.png" alt="">
    </div>
  </div>
</div>

<div class="container-fluid bg-info text-white text-center">
<br>  
<h1>Que nos hace differentes</h1>
  <div class="row">
  <div class="col-2"></div>
     <div class="col text-center parra">
        <i class="bi bi-megaphone" style="font-size: 60px;"></i>
        <h2>Promueve tu negocio</h2>
        <p >Promueve tu negocio. Se contratado mostrando tus servicios,
        muestra los trabajos o servicio que proporcionas con solo dar un click, contactanos</p>
      </div>
      <div class="col-1"></div>
      <div class="col text-center parra">
      <i class="bi bi-chat-square-text-fill " style="font-size: 55px;"></i>
        <h2>Recibe retroalimentación</h2>
        <p >Con retroalimentación de tus clientes, obtiene información valiosa 
          sobre el rendimiento de tus servicios y su clasificación por medio de estrellas.</p>
      </div>
      <div class="col-2"></div>
  </div>
</div>
@include('layouts.partials.footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>