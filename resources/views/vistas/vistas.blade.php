@extends('layout.plantilla')
@section('titulo', 'vistas')
@section('titulodepagina', 'vistas en laravel ')

@section('contenido')
    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-8">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{ asset('img/inicio/laravel1.jpg') }}" alt="First slide"
                                style="width: 100px; height:410px">
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
                        <img src="{{ asset('img/vistasblade/vistab1.png') }}" class="d-block w-100" alt="..."
                            style="width: 80px; height:200px">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <img src="{{ asset('img/vistasblade/vistab2.png') }}" class="d-block w-100" alt="..."
                            style="width: 80px; height:200px">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container ">
        <div class="row">
            <div class="col">
                <h1>vistas en larabel </h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3>
                    ??Que son las vistas?
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
                <h3>D??nde almacenar las vistas en Laravel</h3>
                <p>
                    Existe una carpeta en el proyecto que es donde debemos colocar las vistas en Laravel. Est?? en
                    "resources/views". Si navegas a esa carpeta observar??s que dentro ya hay diversos archivos, incluso
                    directorios. Esto es porque las vistas se pueden organizar por carpetas, para mantener agrupadas las de
                    cada una de las secciones de la aplicaci??n. Nosotros podemos hacer lo mismo, o dejarlas sueltas en el
                    directorio view.
                </p>

                <p>
                    Adem??s ver??s que las vistas tiene una extensi??n ".blade.php". Esto hace referencia a que es un archivo
                    de salida que usa el motor de plantillas "Blade", el oficial de Laravel.

                </p>

            </div>
        </div>
    </div>


    <div class="container">
        <div class="row-sm-12">
            <div class="col-sm-12">
                <h3>Adem??s ver??s que las vistas tiene una extensi??n ".blade.php". Esto hace referencia a que es un archivo
                    de salida que usa el motor de plantillas "Blade", el oficial de Laravel.</h3>
                <p>
                    Ahora toca usar la vista creada en el paso anterior. Lo vamos a hacer desde el propio sistema de rutas,
                    por simplificarnos la vida en este primer ejemplo. De hecho es como se invoca a la vista "welcome" en la
                    ruta predeterminada que podremos ver al instalar el framework.
                </p>
                <ul>
                    <li type="disc">
                        Route::get('algo', function () {
                            return view('algo');
                        });
                    </li>
                    <li type="disc">
                        resources/views/algo.php
                    </li>
                    <li type="disc">
                        resources/views/algo.blade.php
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3>Organizar las vistas por carpetas</h3>
                <p>
                    Es com??n que queramos poner todas las vistas que tengan que ver con la misma secci??n del sitio en una misma carpeta, o todas las vistas de los correos electr??nicos enviados por la aplicaci??n, por ejemplo.
                </p>
                <p>
                    Las carpetas las situaremos dentro de "resources/views" y en ellas colocaremos los archivos php de las vistas, como se ha descrito antes.
                </p>
            </div>
            <div class="col">
                <p>resources/views/otro/index.php</p>
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
