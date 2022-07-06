@extends('index')
@section('contenido')
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-12 offset-md-4 text-center">
                <div class="card border-0 border-start border-bottom">
                    <div class="card-body">
                        <h6>Sistema de riego automatizado</h6>
                        <br>
                        <img src="{{ asset('imagenes/banner1.webp') }}" alt="Sistema de riego interligente"
                            class="img-fluid">
                    </div>
                </div>
            </div>

            <div class="col-12">
                <h6>Descripción: </h6>
                <p>Dicho sistema tiene como finalidad proteger de manera inteligente mediante una apliación móvil
                    a los cultivos y mejorar el riego de las
                    plantaciones de dificil
                    acceso, utilizando diferentes recursos como el hardware y el software.</p>
                <p>
                    Se trata de un sistema de riego automático, el cual es muy útil para apoyar al campo con
                    sus cosechas y sería de bastante beneficio para los agricultores del campo, así también como en viveros,
                    huertas, jardines, etc. Ya que se haría de forma fácil y rápida, tomando en cuenta el tamaño del campo
                    de cosechas.
                </p>
            </div>
            <div class="col-12">
                <h6>¿Cómo funciona? </h6>

                <ol>
                    <li>Obtiene información de la humedad de la tierra mediante sensores higrómetros.</li>
                    <li>Obtiene datos de
                        luminosidad mediante
                        sensores de luminosidad.</li>
                    <li>Se conecta al servicio de almacenamiento en la nube (Firebase)</li>
                    <li>Envía esos
                        datos obtenidos para ser procesados mediante la aplicación móvil</li>
                    <li>Suministra agua a la planta mediante
                        un riego de goteo el cual utiliza
                        una manguera especial y una minibomba.</li>
                </ol>
            </div>
            <div class="col-12">
                <h6>Ventajas al implementar esta solución: </h6>
                <p>
                    Se evita el riego que normalmente se realiza a las plantas manualmente, ya qué el sistema determinará en
                    qué momento
                    debe de hacer el respectivo riego, sólo bastaría con tener el depósito de agua lleno de
                    agua para que pueda realizar el riego de lo contrario no se hará.
                </p>
                <p>
                    Resulta muy innovador ya que ayudara a mantener siempre las
                    plantas en buenas calidades tales como de temperaturas y de la humedad, este tipo de
                    sistema monitoreara las plantas, el suelo, informa sobre el nivel de humedad y la temperatura es decir
                    si ya es hora de regar o no o hay mucho nivel de temperatura o hay mucha humedad, la acción que
                    informa es través de un app móvil mandando un mensaje.
                    El sistema activa el timbre cuando el nivel de humedad o de temperatura llega a su límite establecido
                    mandando un mensaje, por lo tanto este sistema ayudaría a mantener siempre una buena calidad de
                    plantas ya sea café, frijol, flores etc.

                </p>
            </div>
        </div>
    </div>
@endsection
