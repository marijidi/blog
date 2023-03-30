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
    <!--CATEGORIAS-->
    <section>

        <div class="container" style="margin-bottom: 1%">
            <div class="card-deck">
                <div class="borde">
                    <div class="col-12 col-md-12 col-lg-9 text-white " style="width: 100%">
                        <div class="row ">
                            <div class="row row-cols-1 row-cols-md-3 g-3">
                            
                                @include('layouts.partials.category')
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
    @include('layouts.partials.footer')
    </div>

</body>

</html>
