<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>All Categories</title>
</head>
<body>
    <section style="padding-top:60px;">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                <div class="card">
                    <div class="card-header">All Categories <a href="/add-category" class="btn btn-success">Add New</a>   
                    </div>
                    <div class="card-body">
                    @if(Session::has('category_deleted'))
                        <div class="alert alert-success" role="alert">
                             {{Session::get('category_deleted')}}
                        </div>
                        @endif
                       <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td>{{$category->name}}</td>
                                <td>{{$category->description}}</td>
                                <td><img src="{{asset('images')}}/{{$category->image}}" alt="" style="max-width:60px;"/></td>
                                <td>
                                    <a href="/edit-category/{{$category->category_id}}" class="btn btn-info">Edit</a>
                                    <a href="/delete-category/{{$category->category_id}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                       </table>
                       <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                       <a class="btn btn-danger" href="{{ url('admin/') }}">Salir</a>
                       </div>
                    </div>
                </div>
              </div>
           </div> 
        </div>
    </section>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        
</body>
</html>