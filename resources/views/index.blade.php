<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <!--bootstrap-->
  @include('layouts.partials.linksBoost')
  
    
</head>
<body>
@include('layouts.partials.navbar')

@include('layouts.partials.carrusel')
 
 <!--CATEGORIAS-->
 <section  >
   <div class="card-deck">
     <div class="container" style="margin-bottom: 1%">
       <div class="borde">
          <hr class="border border-primary border-3 opacity-75">
          <H2 class="centro"> ¿Quiénes somos?</H2>
          <p class="centro" > Alguna vez te has visto en la necesidad de buscar a una persona 
            que pueda reparar o realizar algún otro servicio pero no cuentas con un número de 
            teléfono o no tienes referencia alguna de los trabajos que realiza esa persona que
             te recomendaron. ¡Multitrabajos HN está para ayudarte! Contamos con un directorio 
             de personas cuyos servicios pueden ser lo que estés buscando, desde alguien que 
             pueda reparar tu lavadora hasta una persona que pueda maquillarte para ese evento 
             importante.
         </p>
         <hr >
         <H2 class=""> CATEGORIAS</H2>
         <hr >
         <div class="col-12 col-md-12 col-lg-9  " style="width: 100%">
           <div class="row justify-content-center ">
             <div class="row row-cols-1 row-cols-md-3 g-3">
             @include('layouts.partials.category')

             </div>
            </div>
          </div>
       </div>
     
       <!------ Tarjetas ----->
       <div class="col-12 col-md-12 col-lg-9  " style="width: 100%">
         <div class="row justify-content-center ">
           <hr>
           <br>
           <H2 class=""> SERVICIOS MAS SOLICITADOS</H2>
           <hr>
           <section class="personal ">
             <div class="row mt-3">
               <div class="card-group g-2">
                  <!--- Tarjeta 1 --->
                  <div class="col">
                    <div class="card text-bg-light" style="width: 16rem;">
                      <img src="https://st1.uvnimg.com/dims4/default/c0b3972/2147483647/thumbnail/1240x698/quality/75/?url=https%3A%2F%2Fuvn-brightspot.s3.amazonaws.com%2Fassets%2Fvixes%2Fimj%2Fvivirsalud%2FL%2FLas-caracteristicas-de-los-diferentes-tipos-de-rostros-2.jpg" width="50" height="140" class="card-img-top img-border">
                      <div class="card-body text-dark">
                        <h5 class="card-title">Adriana Carranzas</h5>
                        <div class="iconos">
                         <ul class="action">
                         <div class="ranking">
                           <i class="bi bi-star-fill starts"></i>
                           <i class="bi bi-star-fill starts"></i>
                           <i class="bi bi-star-fill starts"></i>
                           <i class="bi bi-star-fill starts"></i>
                           <i class="bi bi-star-fill starts fa-gray"></i> (6)
                         </div>
                         <i class="bi bi-clock"> 5 años de experiencia</i>
                         <li><i class="bi bi-coin"> L 900.00</i></li>
                         <li><i class="bi bi-telephone-fill"> 8754-2555</i></li>
                       </ul>
                     </div>
                     <h5 class="card-title">Limpieza</h5>
                     <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                     <div class="card-footer text-center ">
                       <a href="#" class="btn">Reservar</a>
                      </div>
                    </div>
                  </div>
               </div>
               <!--- Tarjeta 2 --->
               <div class="col">
                 <div class="card text-bg-light" style="width: 16rem;">
                   <img src="img/per1.jpg" width="50" height="140" class="card-img-top img-border">
                   <div class="card-body  text-dark">
                     <h5 class="card-title">Card title</h5>
                     <div class="iconos">
                       <ul class="action">
                         <div class="ranking">
                           <i class="bi bi-star-fill starts"></i>
                           <i class="bi bi-star-fill starts"></i>
                           <i class="bi bi-star-fill starts"></i>
                           <i class="bi bi-star-fill starts"></i>
                           <i class="bi bi-star-fill starts fa-gray"></i> (6)
                         </div>
                         <i class="bi bi-clock"> 5 años de experiencia</i>
                         <li><i class="bi bi-coin"> L 900.00</i></li>
                         <li><i class="bi bi-telephone-fill"> 8754-2555</i></li>
                       </ul>
                     </div>
                     <h5 class="card-title">Make-up</h5>
                     <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                     <div class="card-footer text-center">
                       <a href="#" class="btn">Reservar</a>
                      </div>
                   </div>
                 </div>
                </div>
                <!--- Tarjeta 3 --->
                <div class="col">
                  <div class="card text-bg-light" style="width: 16rem;">
                   <img src="img/per1.jpg" width="50" height="140" class="card-img-top img-border">
                   <div class="card-body  text-dark">
                     <h5 class="card-title">Card title</h5>
                     <div class="iconos">
                        <ul class="action">
                          <div class="ranking">
                            <i class="bi bi-star-fill starts"></i>
                            <i class="bi bi-star-fill starts"></i>
                            <i class="bi bi-star-fill starts"></i>
                            <i class="bi bi-star-fill starts"></i>
                            <i class="bi bi-star-fill starts fa-gray"></i> (6)
                          </div>
                          <i class="bi bi-clock"> 7 años de experiencia</i>
                          <li><i class="bi bi-coin"> L 900.00</i></li>
                          <li><i class="bi bi-telephone-fill"> 8754-2555</i></li>
                        </ul>
                     </div>
                     <h5 class="card-title">Pedicure</h5>
                     <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                     <div class="card-footer text-center">
                       <a href="#" class="btn">Reservar</a>
                     </div>
                   </div>
                 </div>
               </div>
               <!--- Tarjeta 4 --->
               <div class="col">
                 <div class="card text-bg-light" style="width: 17rem;">
                   <img class="card-img-top img-border" src="http://resizer.sevilla.abc.es/resizer/resizer.php?imagen=https://sevilla.abc.es/estilo/bulevarsur/wp-content/uploads/sites/14/2020/07/cortes-de-pelo-adelgazan-rostro.jpg&nuevoancho=652" width="50" height="140">
                   <div class="card-body  text-dark">
                     <h5 class="card-title">Card title</h5>
                     <div class="iconos">
                       <ul class="action">
                         <div class="ranking">
                           <i class="bi bi-star-fill starts"></i>
                           <i class="bi bi-star-fill starts"></i>
                           <i class="bi bi-star-fill starts"></i>
                           <i class="bi bi-star-fill starts"></i>
                           <i class="bi bi-star-fill starts fa-gray"></i> (6)
                         </div>
                         <i class="bi bi-clock"> 3 años de experiencia</i>
                         <li><i class="bi bi-coin"> L 900.00</i></li>
                         <li><i class="bi bi-telephone-fill"> 8754-2555</i></li>
                        </ul>
                     </div>
                     <h5 class="card-title">Jardinería</h5>
                     <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                     <div class="card-footer text-center">
                       <a href="#" class="btn">Reservar</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section> 
         </div>
       </div>
      </div>
   </div>
  </section>
  @include('layouts.partials.footer')
</div>

</body>
</html>
