@extends('layout.main')

@section('title','Modelos')

@section('content')


<h1>Nuestros modelos 2022</h1>
<hr>
<div class="row bg-image hover-zoom">
    @foreach($autos as $auto)
    <div class="col-md-4">
        <div class="card" >
            <img class="card-img-top img-fluid "  src="{{$auto['Imagen']}} " alt="Card image cap" >
            <div class="card-body ">
                <h5 class="card-title ">{{$auto['Marca']}}</h5>
                <p class="card-text">{{$auto['Estado']}}</p>
                <a class=" link-secondary py-3 d-block text-decoration-none text-center" href="{{$auto['Web']}}">Página Oficial</a>

            </div>
        </div>
        <hr >
    </div>
    @endforeach



    <div class="col-md-16 d-flex flex-row justify-content-center alig-items-center">
        <form action="{{route('contact')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Nombre">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="message">Mensaje</label>
                <textarea class="form-control" name="message" id="message" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>














@endsection()