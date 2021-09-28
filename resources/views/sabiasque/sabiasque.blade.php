@extends('layout.plantilla')
@section('titulo', 'sabiasque')
@section('titulodepagina', 'sabias de laravel')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('img/inicio/laravel1.jpg') }}"class="d-block w-100" alt="..."
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

    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col text-center">
                <div class="col"></div>
                <div class="card text-white bg-dark " style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('img/vistasblade/vistab1.png') }}" alt="Card image cap"
                        style="height: 245px;">
                    <div class="card-body">
                        <p class="card-text">Laravel incluye de paquete un sistema de procesamiento de plantillas llamado Blade. Este sistema de plantillas favorece un código mucho más limpio en las Vistas, además de incluir un sistema de Caché que lo hace mucho más rápido. El sistema Blade de Laravel, permite una sintaxis mucho más reducida en su escritura.4​ Por ejemplo, en vez pintar la vista usando el código PHP:
                            .</p>

                    </div>
                </div>
            </div>
            <div class="col text-center">
                <div class="card text-white bg-dark " style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('img/vistasblade/vistasb2.png') }}" alt="Card image cap"
                        style="height: 245px;">
                    <div class="card-body">
                        <p class="card-text">Laravel incluye un sistema de mapeo de datos relacional llamado Eloquent ORM que facilita la creación de modelos. Este ORM se funda en un patrón active record. Es opcional el uso de Eloquent, pues también dispone de otros recursos que facilitan la interacción con los datos, o específicamente la creación de modelos.7​</p>

                    </div>
                </div>
            </div>
            <div class="col text-center">
                <div class="card text-white bg-dark " style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('img/instalacion/instalar2.png') }}" alt="Card image cap"
                        style="height: 245px;">
                    <div class="card-body">
                        <p class="card-text">Laravel tiene como objetivo ser un framework que permita el uso de una sintaxis elegante y expresiva para crear código de forma sencilla y permitiendo multitud de funcionalidades. Intenta aprovechar lo mejor de otros frameworks y aprovechar las características de las últimas versiones de PHP.2​</p>

                    </div>
                </div>
            </div>
            
        </div>
        <!---Pequeño carrucel y dos imagenes --->
        <div class="container mt-3">
            <div class="row">
                <div class="col-sm-8">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{ asset('img/inicio/laravel1.jpg') }}"
                                    alt="First slide" style="width: 100px; height:410px">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ asset('img/inicio/laravel2.jpg') }}"
                                    alt="Second slide" style="width: 100px; height:410px">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ asset('img/inicio/laravel3.jpg') }}"
                                    alt="Third slide" style="width: 100px; height:410px">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <div class="col">
                            <img src="{{ asset('img/inicio/laravel1.jpg') }}"class="d-block w-100" alt="..."
                                style="width: 80px; height:200px">
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
    @endsection
