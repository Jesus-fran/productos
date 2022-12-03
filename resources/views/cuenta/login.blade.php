@extends('index')
@section('contenido')
    <div class="container">
        <br><br><br>
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block contendor_img_login">
                            <img src="{{ asset('imagenes/banners/img_login.jpg') }}" alt="login form" class="img_login"
                                style="border-radius: 1rem 0 0 1rem;" />
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">

                                <form action="{{ route('iniciar-sesion')}}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="d-flex align-items-center mb-3 pb-1">
                                        <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"><img
                                                src="{{ asset('imagenes/logo/logo.png') }}" alt="logo" class="img-fluid"
                                                srcset=""></i>
                                        <span class="h1 fw-bold mb-0"></span>
                                    </div>

                                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">
                                        Inicie sesión en su cuenta</h5>
                                    
                                    <div class="col text-center"><span style="color:red;">{{$msgErr ?? '' }}</span></div>

                                    <div class="form-outline mb-4">
                                        <input type="email" id="form2Example17" name="email" class="form-control form-control-lg" />
                                        <label class="form-label" for="form2Example17">Dirección de correo
                                            electrónico</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" id="form2Example27" name="password" class="form-control form-control-lg" />
                                        <label class="form-label" for="form2Example27">Contraseña</label>
                                    </div>

                                    <div class="pt-1 mb-4 text-center">
                                        <button class="btn btn-success btn-lg btn-block" type="submit">Login</button>
                                    </div>
                                    <div class="col text-center">
                                        <a href="{{ route('home') }}" class="small text-muted">Términos de Uso.</a>
                                        <a href="{{ route('home') }}" class="small text-muted">Política de privacidad</a>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
    </div>
@endsection
