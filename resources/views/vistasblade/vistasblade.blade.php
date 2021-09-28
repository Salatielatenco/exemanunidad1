@extends('layout.plantilla')
@section('titulo', 'vistas')
@section('titulodepagina', 'vistas en laravel ')

@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{ asset('img/religiosa/religiosa8.jpg') }}" alt="First slide"
                            style="width: 100px; height:410px">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('img/religiosa/religiosa9.jpg') }}"
                            alt="Second slide" style="width: 100px; height:410px">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('img/religiosa/religiosa10.jpg') }}"
                            alt="Third slide" style="width: 100px; height:410px">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h2>Laravel:Creación de Vistas con Blade </h1>
                <p>
                    Para poder crear las vistas de nuestro proyecto en Laravel tenemos la opción de utilizar Blade, el
                    cual es el motor de creación de plantillas simples proporcionado por Laravel.Permite realizar
                    operaciones con datos,sustitución de plantillas.
                </p>

                <h3>¿Por que Blade?</h3>
                <ul>
                    <li>Blade permite utilizar código PHP Simple en las vistas</li>
                    <li>Plantillas mas simples y limpias en código.</li>
                    <li>Incluye sistema de cache que mejora la rapidez.</li>
                    <li>Herencia de plantillas</li>
                    <h1>Creación de plantillas Máster.</h1>
                </ul>
        </div>
    </div>
</div>

<div class="contianer">
    <div class="row">
        <div class="col-sm-6">
            <h3>
                Creación de Vistas.
            </h3>
            <p>
                Las vistas que se generan usando Blade usan la extensión .blade.php y se encuentran en la ruta
                resources/views

                Como ejemplo vamos a crear una Pagina Maestra, es decir una plantilla que se repite en varias paginas,
                en este archivo podemos tener HTML y usar CSS.
            </p>

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('img/vistasblade/vistab2.png') }}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Crear controlador en la ruta http\Controllers en el ejemplo creamos HomeController.php en este archivo crearemos la función para mostrar la vista.
                    </p>
                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <h3>Crear ruta al archivo en la ubicación routes\web.php. Al crear esta ruta nos permite visualizar la vista como pagina principal.</h3>
        <ul>
            <li>
                Route::get('/', 'HomeController@inicio');
            </li>
        </ul>
        <p>
            De esta forma puedes visualizar como pagina tu plantilla Blade llamada principal.blade.php. Este es el primer paso, en la siguiente entrada seguiremos con los pasos para crear la plantilla con lo que necesitamos y como usarla.
        </p>
        </div>
    </div>
</div>


@endsection
    