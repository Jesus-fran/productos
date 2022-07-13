@extends('index')
@section('contenido')
    <div class="container">
        <br><br>
        <div class="row">
            <div class="col-md-5 offset-md-1 text-center">
                <div class="card">
                    <div class="card-body">
                        <h6>Nosotros</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-5 offset-md-1 text-center">
                <div class="card">
                    <div class="card-body">
                        <h6>¿Quienes somos?</h6>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-5 offset-md-1 text-center">
                <i class="bi bi-building fs-3"></i>
                <div class="card border-0 border-start border-bottom">
                    <div class="card-body">
                        
                        <p>Somos una empresa en la que contamos con el conocimiento y experiencia para el desarrollo de software innovador, 
                            esto ayuda a los clientes a resolver problemas comerciales, permitiendo fusionar la excelencia
                            en ingeniería, la innovación, la estrategia y la visión.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-5 offset-md-1 text-center">
                <i class="bi bi-person fs-3"></i>
                <div class="card border-0 border-start border-bottom">
                    <div class="card-body">
                        <ul>
                            <li>Diaz López Luis Adrian</li>
                            <li>López Diaz Marcelino</li>
                            <li>López Sántiz Marco Antonio</li>
                            <li>Perez López Nicodemo</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-6 offset-3 text-center">
                <h6>Nuestros valores</h6>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center">
                <div class="card border-0 border-bottom">
                    <div class="card-body">
                        <ul>
                            <li><i class="bi bi-hand-thumbs-up">&nbsp;&nbsp;</i>Honestidad</li>
                            <li><i class="bi bi-award-fill"></i>&nbsp;&nbsp;Calidad</li>
                            <li><i class="bi bi-person-check"></i>&nbsp;&nbsp;Servicio al cliente</li>
                            <li><i class="bi bi-people-fill"></i>&nbsp;&nbsp;Trabajo en equipo</li>
                            <li><i class="bi bi-lightbulb"></i>&nbsp;&nbsp;Innovación</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <script>
        document.title = "EcoTic | Conócenos";
    </script>
@endsection
