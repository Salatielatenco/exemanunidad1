@extends('layout.plantilla')
@section('titulo', 'controladores')
@section('titulodepagina', 'contralodres en laravel ')

@section('contenido')
    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-8">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{ asset('img/controladores/controlador1.png') }}" alt="First slide"
                                style="width: 100px; height:410px">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('img/controladores/controlador2.jpg') }}"
                                alt="Second slide" style="width: 100px; height:410px">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('img/controladores/controlador3.jpg') }}"
                                alt="Third slide" style="width: 100px; height:410px">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="col">
                        <img src="{{ asset('img/controladores/controlador4.png') }}" class="d-block w-100" alt="..."
                            style="width: 80px; height:200px">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <img src="{{ asset('img/controladores/controlador5.png') }}" class="d-block w-100" alt="..."
                            style="width: 80px; height:200px">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3>
                    contralodres en Laravel
                </h3>
                <p>
                    Los controladores son un mecanismo que nos permite agrupar la lógica de peticiones HTTP relacionadas y
                    de esta forma organizar mejor nuestro código. En esta quinta lección del Curso de Laravel desde cero
                    aprenderemos a hacer uso de ellos y veremos además cómo las pruebas unitarias nos permiten verificar los
                    cambios que introducimos en nuestro código de forma fácil y rápida.
                </p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3>Generar un controlador</h3>
                <p>
                    Generamos un nuevo controlador con el comando de Artisan make:controller pasándole el nombre que
                    queremos darle. En el ejemplo el nombre es UserController:
                </p>
                <h4>
                    App\Http\Controllers\Controller:
                </h4>
                <p>
                    Dentro de esta clase (en nuestro caso UserController) agregamos nuestros métodos públicos (llamados
                    acciones),
                    que después podemos enlazar a una ruta:

                </p>

            </div>
        </div>
    </div>


    <div class="container">
        <div class="row-sm-12">
            <div class="col-sm-12">
                <h3>Enlazar una ruta a un controlador</h3>

                <p>
                    Para enlazar una ruta a un controlador pasamos como argumento el nombre del controlador y del método que
                    queremos enlazar, separados por un @. En este caso queremos enlazar la ruta /usuarios al método index
                    del controlador UserController
                </p>
                <ul>

                    <li type="disc">Route::get('/usuarios', 'UserController@index');</li>



                </ul>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3>Controlador de un solo método</h3>
                <p>
                    Si quieres tener un controlador que solo tenga una acción, puedes hacerlo llamando al método __invoke,
                    por ejemplo:
                </p>
                <ul>
                    <li type="disc">Route::get('/saludo/{name}/{nickname}', 'WelcomeUserController');</li>
                </ul>
            </div>
        </div>
    </div>

 
@endsection
