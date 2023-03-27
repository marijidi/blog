<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>All Collaborators</title>
</head>
<body>
    <section style="padding-top:60px;">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        All Collaborators <a href="/add-collaborator" class="btn btn-success">Add New</a>
                    </div>
                    <div class="card-body">
                    @if(Session::has('collaborator_deleted'))
                        <div class="alert alert-success" role="alert">
                             {{Session::get('collaborator_deleted')}}
                        </div>
                        @endif
                       <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Lastname</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($collaborators as $collaborator)
                            <tr>
                                <td>{{$collaborator->name}}</td>
                                <td>{{$collaborator->lastname}}</td>
                                <td>{{$collaborator->phone}}</td>
                                <td>{{$collaborator->email}}</td>
                                <td><img src="{{asset('images')}}/{{$collaborator->image}}" alt="" style="max-width:60px;"/></td>
                                <td>
                                    <a href="/edit-collaborator/{{$collaborator->id}}" class="btn btn-info">Edit</a>
                                    <a href="/delete-collaborator/{{$collaborator->id}}" class="btn btn-danger">Delete</a>
                                </td>
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
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        
</body>
</html>