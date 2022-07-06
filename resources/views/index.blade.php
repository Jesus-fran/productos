<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/css.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
</head>

<body>


    @include('nav_foot.navbar')

    <div class="container-fluid">
        @section('contenido')
            <div class="container">
                <br>
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
                <br><br>
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
                <br>
                <br>
                <br>
                <div class="row banner1 align-items-center">
                    <div class="col">
                        <h6>Explora nuestros productos realizados con éxito</h6>
                        <a class="btn btn-outline-success" href="{{ route('producto') }}" role="button">Explorar
                            productos&nbsp&nbsp<i class="bi bi-box"></i></a>
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
