<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Services</title>
</head>
<body>

<section style="padding-top:60px;">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        All Services <a href="/add-collaborator" class="btn btn-success">Add New</a>
                    </div>
                    <div class="card-body">
                    @if(Session::has('Services deleted'))
                        <div class="alert alert-success" role="alert">
                             {{Session::get('Services deleted')}}
                        </div>
                        @endif
                       <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Category</th>
                            <th scope="col">Price</th>
                            <!-- <th scope="col">Collaborator</th> -->
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($services as $service)
                            <tr>
                              <th scope="row">{{$service->service_id}}</th>
                              <td>{{$service->name}}</td>
                              <td>{{$service->category->name}}</td> 
                              <td>{{$service->price}}</td>
                              <!-- <td>{{$service->collab_id}}</td> -->
                            </tr>
                          @endforeach
                        </tbody>
                       </table>
                        
                    </div>
                </div>
              </div>
           </div> 
        </div>
    </section>
    
</body>
</html>