<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!--estilo css.-->
    <link rel="stylesheet" href="/css/estilo.css" />
</head>

<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand"  style="color: black;  font-size: 25px;" href="/">
                <img src="/img/LOGO.png" alt="Logo" width="100" height="90">
                MULTITRABAJOS HN
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link active" style="color: black;  font-size: 23px; " aria-current="page" href="/" class="btn mt-1" role="button" >INICIO</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link active" style="color: black;  font-size: 23px;  " aria-current="page" href="/acercade" class="btn mt-1" role="button" >ACERCA DE</a>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link active" style="color: black;  font-size: 23px;  " aria-current="page" href="/category" class="btn mt-1" role="button" >
              SERVICIOS
            </a>
            <!--
            <ul class="dropdown-menu">
            <li><a class="dropdown-item " href="#">HOGAR</a></li>
            <li><a class="dropdown-item" href="#">BELLEZA</a></li>
            <li><a class="dropdown-item" href="#">TECNICOS</a></li>
          </ul>
           -->
        </li> 
   
      </ul>
                   
            </div>
        </div>
    </nav>

    <div class="container pt-5">
        @foreach ($data['categorie'] as $categorie)
            <H2 class=""> {{ $categorie->name }}</H2>
        @endforeach
        <!------ Tarjetas ----->
        <div class="row row-cols-1 row-cols-md-3 g-3">
            @foreach ($data['services'] as $service)
                <!--- Tarjeta 1 --->
                <div class="row row-cols-1 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card text-bg-light" style="width: 17rem;">
                            <img class="card-img-top" src="{{ $service->url_image }}" width="50" height="140">
                            <div class="card-body text-white">
                                <h5 class="card-title">{{ $service->full_name }}</h5>
                                <div class="iconos">
                                    <ul class="action">
                                      
                                        <li><i class="bi bi-coin"> {{ $service->price }}</i></li>
                                        <li><i class="bi bi-telephone-fill"> {{ $service->phone }}</i></li>
                                        <li><i class="bi bi-envelope-fill"> {{ $service->email }}</i></li>
                                    </ul>
                                </div>
                                <h5 class="card-title">{{ $service->name }}</h5>
                                <div class="card-footer text-center">
                                    <p class="card-text">Reserva tu servicio dando click en reservar</p>
                                    <a href="#" class="btn mt-1">Reservar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="pt-5"></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

</body>

</html>
