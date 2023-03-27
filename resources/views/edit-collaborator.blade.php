<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Edit Collaborator</title>
</head>
<body>
    <section style="padding-top:60px;">
        <div class="container">
           <div class="row">
              <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        Edit Collaborator
                    </div>
                    <div class="card-body">
                        <!--Message Alert-->
                        @if(Session::has('collaborator_updated'))
                        <div class="alert alert-success" role="alert">
                             {{Session::get('collaborator_updated')}}
                        </div>
                        @endif
                        <form method="POST" action="{{route('collaborator.update')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="collab_id" value="{{$collaborator->collab_id}}"/>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" value="{{$collaborator->name}}" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="lastname">Lastname</label>
                                <input type="text" name="lastname" value="{{$collaborator->lastname}}" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" value="{{$collaborator->phone}}" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" value="{{$collaborator->email}}" class="form-control"/>
                            </div>
                            <!--Choose file con su respectiva funcion de preview-->
                            <div class="form-group">
                                <label for="file">Choose Image</label>
                                <input type="file" name="file" class="form-control" onchange="previewFile(this)"/>
                                <img id="previewImg" src="{{asset('images')}}/{{$collaborator->image}}" alt="preview image" style="max-width:130px;margin-top:20px;"/>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
              </div>
           </div> 
        </div>
    </section>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script>//Funcion para preview de imagen que se planea subir
            function previewFile(input)
            {
                var file=$("input[type=file]").get(0).files[0];
                if(file)
                {
                    var reader = new FileReader();
                    reader.onload = function(){
                        $('#previewImg').attr("src",reader.result);
                    }
                    reader.readAsDataURL(file);
                }
            }
        </script> 
</body>
</html>