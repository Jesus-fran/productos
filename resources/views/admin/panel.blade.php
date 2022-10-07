@extends('index')
@section('contenido')
    <div class="container">
        <br>
        <div class="row">
            <div class="col-12 text-center">
                <h5 class="titulo-1 fw-bold">Panel de administración</h5>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-5">
                <div class="col text-center font-contenido">
                    <p>Registrar usuario</p>
                </div>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('registrar-user') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="input-user" class="form-label">Nombre de usuario</label>
                                <input type="text" class="form-control" name="user" id="input-user"
                                    aria-describedby="userHelp" value="{{ old('user') }}" required>
                                <div id="userHelp" class="form-text"></div>
                            </div>
                            <div class="mb-3">
                                <label for="input-email" class="form-label">Dirección de correo
                                    electrónico</label>
                                <input type="email" class="form-control" name="email"  value="{{ old('email') }}" id="input-email"
                                    aria-describedby="emailHelp" required>
                                <div id="emailHelp" class="form-text"></div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" name="password" id="exampleInputPassword1" required>
                            </div>
                            <div class="col text-center">
                                <button type="submit" id="registrar_user" class="btn btn-success">Registrar</button>
                            </div>
                        </form>
                    </div>

                    <div class="col text-center"><span style="color:red">{{$msg_err ?? '' }}</span></div>
                    <div class="col text-center"><span style="color:green">{{$msg ?? '' }}</span></div>
                   

                </div>
            </div>
            <div class="col-5 offset-2">
                <div class="col text-center font-contenido">
                    <p>Usuarios registrados</p>
                </div>
                <div class="col">
                    <div class="col text-center"><span style="color:green">{{$email_act ?? '' }}</span></div>
                    <div class="col text-center"><span style="color:green">{{$pass_act ?? '' }}</span></div>
                </div>
                <div class="card">
                    <ul class="list-group">
                        @isset($users)
                          {!!$users!!}
                        @endisset
                        {{-- <li class="list-group-item"><i class="bi bi-person" style="margin: 10px"></i>Marcelino</li>
                        <li class="list-group-item"><i class="bi bi-person" style="margin: 10px"></i>Marco</li>
                        <li class="list-group-item"><i class="bi bi-person" style="margin: 10px"></i>Adrian</li>
                        <li class="list-group-item"><i class="bi bi-person" style="margin: 10px"></i>Nicodemo</li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
