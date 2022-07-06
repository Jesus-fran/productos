<nav class="navbar navbar-expand-lg" id="barra_nav">
    <a class="navbar-brand offset-md-1" href="{{ route('home') }}"><i class="bi bi-code"></i> Inicio</a>
    <button class="navbar-toggler btn_nav" type="button" data-bs-toggle="collapse" data-bs-target="#opciones"
        aria-controls="opciones" aria-expanded="false" aria-label="Toggle navigation" onclick="show_menu()">
        <i class="bi bi-list"></i>
    </button>
    <div class="collapse navbar-collapse" id="opciones">
        <div class="container navbar_collapsed" id="navbar_collapsed">
            <div class="row">
                <div class="navbar-nav">

                    <div class="col-md-auto offset-md-3 " id="opcion"><a class="nav-link"
                            href="{{ route('producto') }}"><i class="bi bi-box">&nbsp&nbsp</i>Producto</a>
                    </div>
                    <div class="col-md-auto offset-md-1" id="opcion"><a class="nav-link"
                            href="{{ route('galeria') }}"><i class="bi bi-card-image"></i>&nbsp&nbspGalería</a></div>
                    <div class="col-md-auto offset-md-1" id="opcion"><a class="nav-link" href="{{ route('conocenos') }}"><i class="bi bi-person"></i>Conócenos&nbsp&nbsp
                        </a></div>
                </div>
            </div>
        </div>
    </div>
</nav>