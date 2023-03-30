@extends('layouts.auth-master')

@section('content')
   
<!---->
<form action="/register" method="POST">
@csrf
<a class="navbar-brand" style="font-size: 28px;"  href="/">
        <img src="img/LOGO.png" alt="Logo" width="100" height="90" >
        MULTITRABAJOS HN
      </a>
      <h2>REGISTER</h2>
    @include('layouts.partials.messages')
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Username</label>
    <input type="text" name="username" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password confirmation</label>
    <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 ">
   <a href="/login">Login</a>
  </div>
  <button type="submit" class="btn btn-primary" >Create account</button>
</form>


@endsection