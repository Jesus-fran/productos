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
                        <form>
                            <div class="mb-3">
                                <label for="input-user" class="form-label">Nombre de usuario</label>
                                <input type="text" class="form-control" id="input-user"
                                    aria-describedby="userHelp">
                                <div id="userHelp" class="form-text"></div>
                            </div>
                            <div class="mb-3">
                                <label for="input-email" class="form-label">Dirección de correo
                                    electrónico</label>
                                <input type="email" class="form-control" id="input-email"
                                    aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text"></div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="col text-center">
                                <button type="submit" class="btn btn-success">Registrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-5 offset-2">
                <div class="col text-center font-contenido">
                    <p>Usuarios registrados</p>
                </div>
                <div class="card">
                    <ul class="list-group">
                        <li class="list-group-item"><i class="bi bi-person" style="margin: 10px"></i>Marcelino</li>
                        <li class="list-group-item"><i class="bi bi-person" style="margin: 10px"></i>Marco</li>
                        <li class="list-group-item"><i class="bi bi-person" style="margin: 10px"></i>Adrian</li>
                        <li class="list-group-item"><i class="bi bi-person" style="margin: 10px"></i>Nicodemo</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
