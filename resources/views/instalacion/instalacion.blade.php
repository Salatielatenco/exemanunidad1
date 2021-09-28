@extends('layout.plantilla')
@section('titulo', 'Instalacion')
@section('titulodepagina', 'Instalacion de laravel')

@section('contenido')
    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-8">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{ asset('img/instalacion/instalar1.jpg') }}" alt="First slide"
                                style="width: 100px; height:410px">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('img/instalacion/instalar2.png') }}" alt="Second slide"
                                style="width: 100px; height:410px">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('img/instalacion/instalar3.jpg') }}" alt="Third slide"
                                style="width: 100px; height:410px">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="col">
                        <img src="{{ asset('img/instalacion/intalar4.jpg') }}" class="d-block w-100" alt="..."
                            style="width: 80px; height:200px">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <img src="{{ asset('img/instalacion/instalar5.jpg') }}" class="d-block w-100" alt="..."
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
                    Pre-requisitos para trabajar con Laravel
                </h3>
                <p>
                    En este curso trabajaremos con Laravel 6, el cual requiere de PHP 7.2 o superior, la extensión PDO para el trabajo con base de datos, así como de otras extensiones que puedes ver en la documentación de Laravel. Asegúrate de que tu entorno de desarrollo cumpla con estos requisitos, de lo contrario revisa el material relacionado debajo del video o la sección de comentarios.
                </p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3>Instalación de Laravel con Composer</h3>
                <p>
                    Hay 2 formas de instalar Laravel, primero con Composer, la cual es mi preferida porque te permitirá instalar la misma versión mayor de Laravel que estaré usando en este curso:
                </p>
                <h4>
                    composer create-project laravel/laravel curso-laravel-styde "6.*"
                </h4>
                <p>
                    Este comando consta de varias partes:

                </p>
                <ul>

                    <li type="disc">create-project es el comando de Composer para crear un nuevo proyecto</li>
                    
                    <li type="disc">laravel/laravel se corresponde al nombre del proyecto en Packagist. Este nombre se comprende de 2 partes divididas por una barra diagonal. La primera es el nombre de la organización, la segunda es el nombre del proyecto.</li>
                    
                    <li type="disc">curso-laravel-styde es el nombre del proyecto, esto puedes personalizarlo a la cadena que quieras, ten en cuenta que este también será el directorio donde Composer instalará tu proyecto, por lo cual si el directorio ya existe y no está vacío, se producirá un error.</li>
                    
                    <li type="disc">"6.*" es la versión de Laravel que queremos instalar, si no la especificas se instalará la última versión disponible del framework.</li>
                    
                </ul>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row-sm-12">
            <div class="col-sm-12">
                <h3>Instalación de Laravel con su instalador</h3>
                <ul>

                    <li type="disc">Ejecuta el comando: composer global require "laravel/installer".</li>
                    
                    <li type="disc">Agrega el directorio donde Composer instala los paquetes globalmente (es decir ~/.composer/vendor/bin) a tu PATH:</li>
                    
                    <li type="disc">Para MacOs y Linux, abre ~/.bashrc, ~/.bash_profile o ~/.zshrc y agrega la cadena :$HOME/.composer/vendor/bin al final del valor de la variable de entorno PATH. Hecho esto ejecuta source ~/.nombre-de-tu-archivo-bash-aqui o reinicia la consola.</li>
                    
                    <li type="disc">Para Windows debes modificar la variable de entorno PATH para agregar la ruta ;C:\Users\tu-usuario-aqui\AppData\Roaming\Composer\vendor\bin. No olvides modificar el directorio para que coincida con aquel donde se ha instalado Composer.</li>
                    </ul>
                <h4>
                    composer create-project laravel/laravel curso-laravel-styde "6.*"
                </h4>
            
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3>Ejecutando nuestra aplicación</h3>
                <p>
                    Laravel incluye un servidor de desarrollo que nos permite poner en funcionamiento nuestra aplicación con tan solo ejecutar el comando: php artisan serve

                    Para abrir la aplicación en el navegador solo haz clic o copia y pega la URL mostrada en tu navegador. Para detener la ejecución presiona Ctrl + C
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
