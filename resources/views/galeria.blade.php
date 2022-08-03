@extends('index')
@section('contenido')
    <div class="container">
        <br>
        <br>
        <div class="row">
            <div class="col-md-6 col-sm-12 offset-md-3 hvr-buzz-out">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                            aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                            aria-label="Slide 5"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('imagenes/carrusel/banner3.jpg') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="titulo-1 text-light">Sistema de riego automatizado</h5>
                                <p>Uso de minibombas y mangeras especiales.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('imagenes/carrusel/img2.jpg') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="titulo-1 text-light">Sistema de riego automatizado</h5>
                                <p>Cuidado de las plantas.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('imagenes/carrusel/img1.jpg') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="titulo-1 text-light">Sistema de riego automatizado</h5>
                                <p class="text-dark">Enfrenta a la sequia de manera inteligente.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('imagenes/carrusel/img3.jpg') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="titulo-1 text-light">Sistema de riego automatizado</h5>
                                <p>Implentando en viveros grandes.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('imagenes/carrusel/img4.webp') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="titulo-1">Sistema de riego automatizado</h5>
                                <p class="text-dark">Uso de aplicación móvil.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <br><br><br>
        <div class="row">
            <div class="col-12 text-center">
                <h5 class="titulo-1">Sistema de riego automatizado implementado en varios casos </h5>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-12 text-start">
                <h6 class="titulo-2">Equipo harware de uso: </h6>
            </div>
        </div>
        <br><br>
        <div class="row galeria">
            <div class="col-md-4 col-sm-12 hvr-grow">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('imagenes/galeria/img20.jpg') }}" class="img-fluid"
                            title="Sensor para medir la humedad">
                    </div>
                    <div class="card-body text-center">
                        Sensor para medir la humedad
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 hvr-grow">
                
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('imagenes/galeria/img21.jpg') }}" class="img-fluid"
                            title="Minibomba para el fluido de agua">
                        </div>
                        <div class="card-body text-center">
                            Minibomba para el fluido de agua
                        </div>
                    </div>
            </div>
            <div class="col-md-4 col-sm-12 hvr-grow">
              
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('imagenes/galeria/img22.jpg') }}" class="img-fluid"
                            title="Display Arduino para ver los datos">
                        </div>
                        <div class="card-body text-center">
                            Display Arduino para ver los datos
                        </div>
                    </div>
            </div>
            <div class="col-md-4 col-sm-12 hvr-grow">
                
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('imagenes/galeria/img14.jpg') }}" class="img-fluid"
                            title="Higrometro para pedir cantidad de agua">
                        </div>
                        <div class="card-body text-center">
                            Higrometro para pedir cantidad de agua
                        </div>
                    </div>
            </div>
            <div class="col-md-4 col-sm-12 hvr-grow">
                
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('imagenes/galeria/img16.jpg') }}" class="img-fluid"
                    title="Arduino midiendo la temperatura de una planta">
                        </div>
                        <div class="card-body text-center">
                            Arduino midiendo la temperatura de una planta
                        </div>
                    </div>
            </div>
            <div class="col-md-4 col-sm-12 hvr-grow">
                
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('imagenes/galeria/img17.png') }}" class="img-fluid"
                            title="Arduino conectado a un tablero y sensor">
                        </div>
                        <div class="card-body text-center">
                            Arduino conectado a un tablero y sensor
                        </div>
                    </div>
            </div>
            <div class="col-md-4 col-sm-12 hvr-grow">
               
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('imagenes/galeria/img18.jpeg') }}" class="img-fluid"
                    title="Se monitorean varias plantas con Arduino">
                        </div>
                        <div class="card-body text-center">
                            Se monitorean varias plantas con Arduino
                        </div>
                    </div>
            </div>
            <div class="col-md-4 col-sm-12 hvr-grow">
               
                
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('imagenes/galeria/img19.JPG') }}" class="img-fluid"
                            title="Arduino y minibomba de agua">
                        </div>
                        <div class="card-body text-center">
                            Arduino y minibomba de agua
                        </div>
                    </div>
            </div>

        </div>
        <br><br><br>
        <div class="row">
            <div class="col-12 text-start">
                <h6 class="titulo-2">Nuestro personal implementando el sistema: </h6>
            </div>
        </div>
        <br><br>
        <div class="row galeria">
            <div class="col-md-4 col-sm-12 hvr-grow">
               
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('imagenes/galeria/img15.webp') }}" class="img-fluid"
                            title="Personal revisando la app móvil">
                        </div>
                        <div class="card-body text-center">
                            Personal revisando la app móvil
                        </div>
                    </div>
            </div>
            <div class="col-md-4 col-sm-12 hvr-grow">
               
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('imagenes/galeria/img3.jpg') }}" class="img-fluid"
                            title="Personal instalando los sensores">
                        </div>
                        <div class="card-body text-center">
                            Personal instalando los sensores
                        </div>
                    </div>
            </div>
            <div class="col-md-4 col-sm-12 hvr-grow">
              
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('imagenes/galeria/img15.jpg') }}" class="img-fluid"
                            title="Personal haciendo mantenimiendo de harware">
                        </div>
                        <div class="card-body text-center">
                            Personal haciendo mantenimiendo de harware
                        </div>
                    </div>
            </div>
        </div>

        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-12 text-start">
                <h6 class="titulo-2">Nuestros conductos de agua en distintos cultivos: </h6>
            </div>
        </div>
        <br><br>
        <div class="row galeria">
    
            <div class="col-md-4 col-sm-12 hvr-grow">
               
                
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('imagenes/galeria/img5.jpg') }}" class="img-fluid"
                    title="Mangeras de riego en muchas plantas">
                        </div>
                        <div class="card-body text-center">
                            Mangeras de riego en muchas plantas
                        </div>
                    </div>
            </div>
            <div class="col-md-4 col-sm-12 hvr-grow">
                
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('imagenes/galeria/img6.jpg') }}" class="img-fluid" title="Mangeras de riego">
                    </div>
                    <div class="card-body text-center">
                        Mangeras de riego
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 hvr-grow">
              
                
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('imagenes/galeria/img7.webp') }}" class="img-fluid"
                            title="Mangueras de riego unidas entre si">
                        </div>
                        <div class="card-body text-center">
                            Mangueras de riego unidas entre si
                        </div>
                    </div>
            </div>

            <div class="col-md-4 col-sm-12 hvr-grow">
                
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('imagenes/galeria/img9.jpg') }}" class="img-fluid" title="Mangeras de riego">
                    </div>
                    <div class="card-body text-center">
                        Mangeras de riego
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 hvr-grow">
                
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('imagenes/galeria/img10.jpg') }}" class="img-fluid"
                    title="Manguera para riego por goteo">
                        </div>
                        <div class="card-body text-center">
                            Manguera para riego por goteo
                        </div>
                    </div>
            </div>
            <div class="col-md-4 col-sm-12 hvr-grow">
               

                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('imagenes/galeria/img11.webp') }}" class="img-fluid" title="Manguera de riego">
                    </div>
                    <div class="card-body text-center">
                        Manguera de riego
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 hvr-grow">
                
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('imagenes/galeria/img12.webp') }}" class="img-fluid" title="Mangeras de riego">
                    </div>
                    <div class="card-body text-center">
                        Mangeras de riego
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.title = "EcoTic | Galería";
    </script>
@endsection
