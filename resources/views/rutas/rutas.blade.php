@extends('layout.plantilla')
@section('titulo', 'rutas')
@section('titulodepagina', 'rutas en laravel ')

@section('contenido')
<div class="container ">
    <div class="row">
        <div class="col">
            <h1>rutas con larabel </h1>
        </div>
    </div>
</div>

    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-8">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{ asset('img/rutas/rutas1.jpg') }}" alt="First slide"
                                style="width: 100px; height:410px">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('img/rutas/rutas2.png') }}"
                                alt="Second slide" style="width: 100px; height:410px">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('img/rutas/rutas 3.png') }}"
                                alt="Third slide" style="width: 100px; height:410px">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="col">
                        <img src="{{ asset('img/rutas/rutas4.jpg') }}" class="d-block w-100" alt="..."
                            style="width: 80px; height:200px">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <img src="{{ asset('img/rutas5/rutas5.jpg') }}" class="d-block w-100" alt="..."
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
                    ¿Que son las rutas?
                </h3>
                <p>
                    Como decíamos, la mayoría seguro entenderá este concepto, no obstante, vamos a exponerlo rápidamente
                    para aquel que no sepa de qué estamos hablando. Las vistas son una de las capas que tiene el sistema
                    MVC, que trata de la separación del código según sus responsabilidades. En este caso, las vistas
                    mantienen el código de lo que sería la capa de presentación.
                </p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            
                <p>
                    Las rutas son una capa muy importante en Laravel, es por ello que el Framework destina un directorio en la carpeta raíz, llamado routes, para ubicar todas las rutas de la aplicación.  Por defecto, tiene 2 archivos de rutas web.php y api.php. Como sus nombres lo expresan en web.php se definen las rutas para la web y en api.php las rutas para crear APIs para la aplicación.
                </p>
                    <ul>
                        <li type="disc">Route::get('/esta-es-la-url', function () {
                            return 'Hola mundo';
                        });
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row-sm-12">
            <div class="col-sm-12">
                <h3>Rutas con parámetros</h3>
                    
                <p>
                    También con el sistema de rutas de Laravel puedes crear rutas más complejas
                    que necesiten de parámetros dinámicos.  
                    Se pueden definir de la siguiente forma:

                </p>
                <ul>
                    <li type="disc">
                        Route::get('/usuarios/detalles/{id}', function ($id) {
                            return "Detalles del usuario: {$id}";
                        });
                    </li>
                
                </ul>
                <p>
                    En este caso Laravel se encarga de capturar el segmento de la ruta que es dinámico (lo identifica porque está encerrado entre llaves). Por tanto, en la URL pasamos la identificación del parámetro encerrado entre llaves y en la función anónima lo pasamos como argumento para que pueda ser accedido y usado dentro de dicha función.
                </p>
                <p>
                    Se pueden usar tantos parámetros como sean necesarios, solo es importante que estén encerrados entre llaves {} y los nombres pueden ser alfanuméricos pero no está permitido usar el guión - pero sí el subrayado _. Además, importa el orden de los parámetros pasados a la función anónima, pero no los nombres que se les de. Por ejemplo:
                </p>
                <ul>
                    <li type="tipo de viñeta">
                        Route::get('posts/{post_id}/comments/{comment_id}', function ($postId, $commentId) {
                            return "Este el comentario {$commentId} del post {$postId}";
                        });
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3>Rutas con filtros o restricciones de expresiones regulares en los parámetros</h3>
                <p>
                    Cuando un usuario hace una petición HTTP, Laravel busca en los archivos de rutas una definición que 
                    coincida con el patrón de la URL según el método HTTP usado y en la primera coincidencia 
                    le muestra el resultado al usuario. 
                    Por tanto el orden de precedencia de las definiciones de rutas es muy importante.
                    
                    
                </p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div>
                    {{ asset('images/tools.png') }}
                </div>
            </div>
        </div>
    </div>
@endsection
