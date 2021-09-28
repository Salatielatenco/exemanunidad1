@extends('layout.plantilla')
@section('titulo', 'inicio')
@section('titulodepagina', 'home ')
@section('contenido')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>LARAVEL</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('img/inicio/laravel1.jpg') }}" class="d-block w-100" alt="..."
                            style="width: 100px; height:600px">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/inicio/laravel2.jpg') }}" class="d-block w-100" alt="..."
                            style="width: 100px; height:600px">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/inicio/laravel3.jpg') }}" class="d-block w-100" alt="..."
                            style="width: 100px; height:600px">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <p>
                Laravel es un framework de código abierto para desarrollar aplicaciones y servicios web con PHP 5, PHP 7 y PHP 8. Su filosofía es desarrollar código PHP de forma elegante y simple, evitando el "código espagueti". Fue creado en 2011 y tiene una gran influencia de frameworks como Ruby on Rails, Sinatra y ASP.NET MVC.2​
            </p>
        </div>
    </div>
</div>   
@endsection