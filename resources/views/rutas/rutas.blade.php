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
                    ??Que son las rutas?
                </h3>
                <p>
                    Como dec??amos, la mayor??a seguro entender?? este concepto, no obstante, vamos a exponerlo r??pidamente
                    para aquel que no sepa de qu?? estamos hablando. Las vistas son una de las capas que tiene el sistema
                    MVC, que trata de la separaci??n del c??digo seg??n sus responsabilidades. En este caso, las vistas
                    mantienen el c??digo de lo que ser??a la capa de presentaci??n.
                </p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            
                <p>
                    Las rutas son una capa muy importante en Laravel, es por ello que el Framework destina un directorio en la carpeta ra??z, llamado routes, para ubicar todas las rutas de la aplicaci??n.  Por defecto, tiene 2 archivos de rutas web.php y api.php. Como sus nombres lo expresan en web.php se definen las rutas para la web y en api.php las rutas para crear APIs para la aplicaci??n.
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
                <h3>Rutas con par??metros</h3>
                    
                <p>
                    Tambi??n con el sistema de rutas de Laravel puedes crear rutas m??s complejas
                    que necesiten de par??metros din??micos.  
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
                    En este caso Laravel se encarga de capturar el segmento de la ruta que es din??mico (lo identifica porque est?? encerrado entre llaves). Por tanto, en la URL pasamos la identificaci??n del par??metro encerrado entre llaves y en la funci??n an??nima lo pasamos como argumento para que pueda ser accedido y usado dentro de dicha funci??n.
                </p>
                <p>
                    Se pueden usar tantos par??metros como sean necesarios, solo es importante que est??n encerrados entre llaves {} y los nombres pueden ser alfanum??ricos pero no est?? permitido usar el gui??n - pero s?? el subrayado _. Adem??s, importa el orden de los par??metros pasados a la funci??n an??nima, pero no los nombres que se les de. Por ejemplo:
                </p>
                <ul>
                    <li type="tipo de vi??eta">
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
                <h3>Rutas con filtros o restricciones de expresiones regulares en los par??metros</h3>
                <p>
                    Cuando un usuario hace una petici??n HTTP, Laravel busca en los archivos de rutas una definici??n que 
                    coincida con el patr??n de la URL seg??n el m??todo HTTP usado y en la primera coincidencia 
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
