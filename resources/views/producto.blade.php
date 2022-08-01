@extends('index')
@section('contenido')
    <br>
    <br>
    <div class="container">
        <div class="row font-contenido">

            <div class="col-12 text-center gy-4">
                <h5 class="titulo-1 fw-bold">Elige tu paquete de sistema</h5>
            </div>
            <div class="col-12 gy-5 hvr-float">
                
                <p>Nuestro producto y servicios tienen como finalidad proteger de manera inteligente mediante una aplicación móvil
                    a los cultivos y mejorar el riego de las
                    plantaciones de dificil
                    acceso, utilizando diferentes recursos como el hardware y el software.</p>
                <p>
                    Se trata de un sistema de riego automático, el cual es muy útil para apoyar al campo con
                    sus cosechas y sería de bastante beneficio para los agricultores del campo, así también como en viveros,
                    huertas, jardines, etc. Ya que se haría de forma fácil y rápida, tomando en cuenta el tamaño del campo
                    de cosechas.
                </p>
                <p>Para ello contamos con 3 diferentes páquetes, los cuales son muy adecuados para el presupuesto de nuestros clientes y la extensión de sus cultivos.</p>
            </div>
            <div class="row gy-4">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="card shadow hvr-grow">
                        <div class="card-body">
                            <br>
                            <div class="col text-center">
                                <h5 class="titulo-2 text-center">Básico</h5>
                                <p class="font-contenido fst-italic fs-6">Perfecto para comenzar</p>
                                <h5 class="titulo-1 fw-bold">MX$ 5.000</h5>
                                <h6 class="titulo-2">Una sola vez</h6>
                                <br>
                                <div class="col text-start">
                                    <p><i class="bi bi-check text-success"></i>&nbsp;&nbsp;Aplicación móvil para monitorear.</p>
                                    <p><i class="bi bi-check text-success"></i>&nbsp;&nbsp;Microcontrolador (Arduino) programado.</p>
                                    <p><i class="bi bi-check text-success"></i>&nbsp;&nbsp;Instalación de sensores.</p>
                                    <p><i class="bi bi-check text-success"></i>&nbsp;&nbsp;Instalación de valvulas y conductos de agua.</p>
                                    <p><i class="bi bi-check text-success"></i>&nbsp;&nbsp;Instalación de la conexión inalambrica.</p>
                                    <p><i class="bi bi-check text-success"></i>&nbsp;&nbsp;Manual de uso para el usuario final.</p>
                                    <p><i class="bi bi-check text-success"></i>&nbsp;&nbsp;15 días de garantia.</p>
                                </div>
                            </div>
                            <br><br>
                            <div class="col-12 text-center">
                                <button type="button" class="btn btn-success btn-md">Comprar páquete básico</button>
                            </div>
                            <p class="font-contenido"></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6  col-xs-12">
                    <div class="card shadow hvr-grow">
                        <div class="card-body">
                            <br>
                            <div class="col text-center">
                                <h5 class="titulo-2 text-center">Premium</h5>
                                <p class="font-contenido fst-italic fs-6">Servicios complementarios</p>
                                <h5 class="titulo-1 fw-bold">MX$ 7.500/Mes</h5>
                                <br>
                                <br>
                                <div class="col text-start">
                                    <p><i class="bi bi-check text-success"></i>&nbsp;&nbsp;Aplicación móvil y web para monitorear.</p>
                                    <p><i class="bi bi-check text-success"></i>&nbsp;&nbsp;Microcontrolador (Arduino) o  microordenador programado.</p>
                                    <p><i class="bi bi-check text-success"></i>&nbsp;&nbsp;Instalación de sensores.</p>
                                    <p><i class="bi bi-check text-success"></i>&nbsp;&nbsp;Instalación de valvulas y conductos de agua.</p>
                                    <p><i class="bi bi-check text-success"></i>&nbsp;&nbsp;Instalación de la conexión inalambrica.</p>
                                    <p><i class="bi bi-check text-success"></i>&nbsp;&nbsp;31 días de garantia.</p>
                                    <p><i class="bi bi-check text-success"></i>&nbsp;&nbsp;Manual de uso para el usuario final.</p>
                                    <p><i class="bi bi-check text-success"></i>&nbsp;&nbsp;Matenimiendo de sensores y equipo harware.</p>
                                    <p><i class="bi bi-check text-success"></i>&nbsp;&nbsp;Seguimiento del funcionamiendo del software.</p>
                                </div>
                            </div>
                            <br><br>
                            <div class="col-12 text-center">
                                <button type="button" class="btn btn-success btn-md">Comprar páquete premium</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6  col-xs-12">
                    <div class="card shadow hvr-grow">
                        <div class="card-body">
                            <br>
                            <div class="col text-center">
                                <h5 class="titulo-2 text-center">Avanzado</h5>
                                <p class="font-contenido fst-italic fs-6">Ideal para cultivos a gran escala</p>
                                <h5 class="titulo-1 fw-bold">MX$ 10.000/Mes</h5>
                                <br>
                                <div class="col text-start">
                                    <p><i class="bi bi-check text-success"></i>&nbsp;&nbsp;Aplicación móvil y web para monitorear.</p>
                                    <p><i class="bi bi-check text-success"></i>&nbsp;&nbsp;Microcontrolador (Arduino) o  microordenador programado.</p>
                                    <p><i class="bi bi-check text-success"></i>&nbsp;&nbsp;Instalación de sensores.</p>
                                    <p><i class="bi bi-check text-success"></i>&nbsp;&nbsp;Instalación de valvulas y conductos de agua.</p>
                                    <p><i class="bi bi-check text-success"></i>&nbsp;&nbsp;Instalación de la conexión inalambrica.</p>
                                    <p><i class="bi bi-check text-success"></i>&nbsp;&nbsp;60 días de garantia.</p>
                                    <p><i class="bi bi-check text-success"></i>&nbsp;&nbsp;Manual de uso para el usuario final.</p>
                                    <p><i class="bi bi-check text-success"></i>&nbsp;&nbsp;Disponibilidad y comunicación 24/7 con el cliente.</p>
                                    <p><i class="bi bi-check text-success"></i>&nbsp;&nbsp;Mantenimiendo inmediato de equipo harware.</p>
                                    <p><i class="bi bi-check text-success"></i>&nbsp;&nbsp;Actualización de la aplicación móvil y web.</p>
                                </div>
                            </div>
                            <br><br>
                            <div class="col-12 text-center">
                                <button type="button" class="btn btn-success btn-md">Comprar páquete avanzado</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center gy-5">
                <a href="" class="text-success">Terminos y condiciones de pago</a>
            </div>
            <div class="col-12 gy-5">

                <p>
                    Nuestro producto resulta muy innovador ya que ayudara a mantener siempre las
                    plantas en buenas calidades tales como de temperaturas y de la humedad, este tipo de
                    sistema monitoreara las plantas, el suelo, informa sobre el nivel de humedad y la temperatura es decir
                    si ya es hora de regar o no o hay mucho nivel de temperatura o hay mucha humedad, la acción que
                    informa es través de un app móvil mandando un mensaje.
                    El sistema activa el timbre cuando el nivel de humedad o de temperatura llega a su límite establecido
                    mandando un mensaje, por lo tanto este sistema ayudaría a mantener siempre una buena calidad de
                    plantas.

                </p>
            </div>
        </div>
    </div>
    <script>
        document.title = "EcoTic | Productos";
    </script>
@endsection
