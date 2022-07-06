@extends('index')
@section('contenido')
    <div class="container">
        <br>
        <br>
        <div class="row">
            <div class="col-md-6 col-sm-12 offset-md-3">
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
                            <img src="{{ asset('imagenes/carrusel/banner3.JPG') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Sistema de riego automatizado</h5>
                                <p>Uso de minibombas y mangeras especiales.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('imagenes/carrusel/img2.JPG') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Sistema de riego automatizado</h5>
                                <p>Cuidado de las plantas.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('imagenes/carrusel/img1.JPG') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Sistema de riego automatizado</h5>
                                <p class="text-dark">Enfrenta a la sequia de manera inteligente.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('imagenes/carrusel/img3.JPG') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Sistema de riego automatizado</h5>
                                <p>Implentando en viveros grandes.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('imagenes/carrusel/img4.WEBP') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="text-dark">Sistema de riego automatizado</h5>
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
                <h6>Sistema de riego automatizado implementado en varios casos </h6>
            </div>
        </div>
        <br><br><br>
        <div class="row galeria">
            
            <div class="col-md-3 col-sm-12"><img src="{{ asset('imagenes/galeria/img1.jpg') }}" class="img-fluid"></div>
           
            <div class="col-md-3 col-sm-12">
                <img src="{{ asset('imagenes/galeria/img2.webp') }}" class="img-fluid">
            </div>
            <div class="col-md-3 col-sm-12">
                <img src="{{ asset('imagenes/galeria/img3.jpg') }}" class="img-fluid">
            </div>
            <div class="col-md-3 col-sm-12">
                <img src="{{ asset('imagenes/galeria/img4.jpg') }}" class="img-fluid">
            </div>
            <div class="col-md-3 col-sm-12">
                <img src="{{ asset('imagenes/galeria/img5.jpg') }}" class="img-fluid">
            </div>
            <div class="col-md-3 col-sm-12">
                <img src="{{ asset('imagenes/galeria/img6.jpg') }}" class="img-fluid">
            </div>
            <div class="col-md-3 col-sm-12">
                <img src="{{ asset('imagenes/galeria/img7.webp') }}" class="img-fluid">
            </div>
            <div class="col-md-3 col-sm-12">
                <img src="{{ asset('imagenes/galeria/img8.jpg') }}" class="img-fluid">
            </div>
            <div class="col-md-3 col-sm-12">
                <img src="{{ asset('imagenes/galeria/img9.jpg') }}" class="img-fluid">
            </div>
            <div class="col-md-3 col-sm-12">
                <img src="{{ asset('imagenes/galeria/img10.jpg') }}" class="img-fluid">
            </div>
            <div class="col-md-3 col-sm-12">
                <img src="{{ asset('imagenes/galeria/img11.webp') }}" class="img-fluid">
            </div>
            <div class="col-md-3 col-sm-12">
                <img src="{{ asset('imagenes/galeria/img12.webp') }}" class="img-fluid">
            </div>
            <div class="col-md-3 col-sm-12">
                <img src="{{ asset('imagenes/galeria/img13.jpg') }}" class="img-fluid">
            </div>
            <div class="col-md-3 col-sm-12">
                <img src="{{ asset('imagenes/galeria/img14.jpg') }}" class="img-fluid">
            </div>
            <div class="col-md-3 col-sm-12">
                <img src="{{ asset('imagenes/galeria/img15.webp') }}" class="img-fluid">
            </div>
            
        </div>
    </div>
@endsection
