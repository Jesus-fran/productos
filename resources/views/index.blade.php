<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EcoTic | Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/css.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <link rel="icon" type="image/jpg" href="{{ asset('favicon.ico') }}" />
</head>

<body>


    @include('nav_foot.navbar')

    <div class="container-fluid">
        @section('contenido')
            <div class="row">

                <div id="carouselExampleCaptions" class="carousel slide carousel-fade no-padding" data-bs-touch="false"
                    data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="2000">
                            <img src="{{ asset('imagenes/banners/home1.webp') }}"
                                class="d-none d-md-block w-100 img-banner" alt="...">
                            <img src="{{ asset('imagenes/banners/home1.webp') }}"
                                class="d-sm-block d-md-none w-100 banner-movil" alt="...">
                            <div class="carousel-caption d-block">
                                <h3>Usa nuestras tecnologías para cuidar tus cosechas</h3>
                                <br>
                                <br>

                                <a class="btn btn-light btn-exproductos" href="{{ route('producto') }}">Explorar
                                    productos</a>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="{{ asset('imagenes/banners/home2.webp') }}"
                                class="d-none d-md-block w-100 img-banner" alt="...">
                            <img src="{{ asset('imagenes/banners/home2.webp') }}"
                                class="d-sm-block d-md-none w-100 banner-movil" alt="...">
                            <div class="carousel-caption d-block">
                                <h3>Monitorea en tiempo real tus plantas</h3>
                                <br>
                                <br>
                                <a class="btn btn-light btn-exproductos" href="{{ route('producto') }}">Explorar
                                    productos</a>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="{{ asset('imagenes/banners/home3.JPG') }}"
                                class="d-none d-md-block w-100 img-banner" alt="...">
                            <img src="{{ asset('imagenes/banners/home3.JPG') }}"
                                class="d-sm-block d-md-none w-100 banner-movil" alt="...">
                            <div class="carousel-caption d-block">
                                <h3>Cosecha tus plantas en buena calidad</h3>
                                <br>
                                <br>
                                <a class="btn btn-light btn-exproductos" href="{{ route('producto') }}">Explorar
                                    productos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <br>
                <div class="row bg-light">
                    <div class="col-md-6 col-sm-12 offset-md-3 text-center">
                        <div class="card border-0 border-bottom">
                            <div class="card-body">
                                <h5>EcoTic es una empresa dedicada a la innovación en la agricultura mexicana
                                    abriendo oportunidad al pequeño, mediano y gran productor a través de tecnologías del
                                    desarrollo de software e IOT, con la finalidad de potencializar las utilidades y cada
                                    unidad de producción.</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>

            </div>
            <div class="row no-padding align-items-center">
                <div class="col-md-6 col-sm-6">
                    <img src="{{ asset('imagenes/banners/arduino.webp') }}" class="img-fluid" alt=""
                        srcset="">
                </div>
                <div class="col-md-5 col-sm-6">
                    <p>Hola</p>
                </div>
                <div class="col-md-5 col-sm-6">
                    <p>Hola2</p>
                </div>
                <div class="col-md-6 col-sm-6 offset-md-1">
                    <img src="{{ asset('imagenes/banners/componentes.jpg') }}" class="img-fluid"
                            alt="" srcset="">
                </div>
            </div>
            <br>
            <div class="row banner1 align-items-center">
                <div class="col-12">
                    <h6>Explora nuestros productos realizados con éxito</h6>
                    <a class="btn btn-light" href="{{ route('producto') }}" role="button">Explorar
                        productos&nbsp&nbsp<i class="bi bi-box"></i></a>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 offset-md-3 text-center">
                        <div class="card border-0 border-bottom">
                            <div class="card-body">
                                <h6>Desarrollo de software innovador y fiable mediante el uso de soluciones y tecnologías de
                                    la
                                    actualidad</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <div class="row">
                    <div class="col-md-3 col-sm-12 offset-md-1 text-center">
                        <div class="card shadow">
                            <div class="card-body">
                                <h6>Empleamos las siguientes tecnologías y lenguajes de programación</h6>
                                <ul>
                                    <li>Laravel</li>
                                    <li>Angular</li>
                                    <li>Flutter</li>
                                    <li>Firebase</li>
                                    <li>Arduino</li>
                                    <li>MySQL</li>
                                    <li>MongoDB</li>
                                    <li>Python</li>
                                    <li>PHP</li>
                                    <li>JavaScript</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 offset-md-1 text-center">
                        <div class="card shadow">
                            <div class="card-body">
                                <h6>Soluciones</h6>
                                <ul>
                                    <li>Desarrollo de aplicaciones web.</li>
                                    <li>Sistemas IOT.</li>
                                    <li>Desarrollo de aplicaciones móviles.</li>
                                    <li>Implementación de base de datos.</li>
                                    <li>Consumir servicios y APIs.</li>
                                    <li>Desarrollo de aplicaciones multiplataforma (Windows y Linux).</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 offset-md-1 text-center">
                        <div class="card shadow">
                            <div class="card-body">
                                <h6>Equipo de desarrollo</h6>
                                <ul>
                                    <li>Expertos en diversas tecnologías.</li>
                                    <li>Enfocados en dar soluciones.</li>
                                    <li>Atención y soporte al cliente de manera inmediata.</li>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @show
    </div>

    <br>
    <br>

    @include('nav_foot.footer')

    <script src="{{ asset('js/js.js') }}"></script>
</body>

</html>
