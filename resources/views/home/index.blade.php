@extends('layouts.app-master')

@section('content')


    <h1 class="container">HOME AQUI EN INDEX</h1>



    
@auth
<p>Bienvenido {{auth()->user()->name ?? auth()->user()->username}}</p> <!-- linea para llamar el nombre de la persona que esta logiada-->
<p>
    <a href="/logout">logout</a>
</p>




@endauth

@endsection
