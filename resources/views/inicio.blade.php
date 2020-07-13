<link rel="stylesheet" href="{{asset('css/estilos.css')}}">

@extends("layouts.plantilla")
{{--@extends("layouts.body")--}}
{{-- @extends("layouts.destino") --}}

@section("cabecera")
    <img class="img-fluid" alt="Responsive image" src="{{asset('img/machu-picchu.jpg')}}" style="width:100%;">
    
    <h2 style="text-align: center;font-size:8vw;color:rgb(216, 43, 43)">Destinos turísticos de Perú</h2>
    <p style="text-align: center;font-size:2vw;color:rgb(216, 43, 43)">¿Cuál es tu favorito?</p>

    <div class="jumbotron text-center">
        <div class="container">
          <div class="row">
            <div class="col-sm-4 mt-3">
                <div class="card" >
                    <img src="{{asset('img/Arequipa.jpg')}}" class="card-img-top" alt="..." width="300" height="200">
                    <div class="card-body">
                        <h5 class="card-title">Arequipa</h5>
                        <p class="card-text">
                            Arequipa está regida por sus volcanes. Lo vemos en las paredes de sus calles, edificios e iglesias; 
                            en la geografía maravillosa que nos regala un valle fértil y unos profundos cañones. 
                        </p>
                        <a href="{{ url('http://54.83.157.12/arequipa') }}" class="btn btn-danger">Más información</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 mt-3">
                <div class="card" >
                    <img src="{{asset('img/huacachina.jpg')}}" class="card-img-top" alt="..." width="300" height="200">
                    <div class="card-body">
                        <h5 class="card-title">Huacachina</h5>
                        <p class="card-text">
                            Es un oasis ubicado a cinco kilómetros al oeste de la ciudad peruana de Ica,en medio 
                            del desierto costero del Océano Pacífico Pacífico,surgió debido al 
                            afloramiento de corrientes subterráneas.
                        </p>
                        <a href="{{ url('http://54.83.157.12/huacachina') }}" class="btn btn-danger">Más información</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 mt-3">
                <div class="card" >
                    <img src="{{asset('img/titicaca.jpg')}}" class="card-img-top" alt="..." width="300" height="200">
                    <div class="card-body">
                        <h5 class="card-title">Titicaca</h5>
                        <p class="card-text">
                            Es el lago navegable más alto del mundo, ubicado en el altiplano andino en los Andes centrales, 
                            en la región de Puno, dentro de la meseta del Collao, a una altitud media de 3812 m s. n. m. 
                        </p>
                        <a href="#" class="btn btn-danger">Más información</a>
                    </div>
                </div>
            </div>
          </div>

          <div class="row mt-5">
                <div class="col-sm-4 mt-3">
                    <div class="card" >
                        <img src="{{asset('img/plaza-armas.jpg')}}" class="card-img-top" alt="..." width="300" height="200">
                        <div class="card-body">
                            <h5 class="card-title">Plaza de Armas-Arequipa</h5>
                            <p class="card-text">
                                Es uno de los principales espacios públicos de Arequipa y el lugar de fundación de la ciudad. 
                                Está ubicada en el Centro histórico de Arequipa
                            </p>
                            <a href="#" class="btn btn-danger">Más información</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 mt-3">
                    <div class="card" >
                        <img src="{{asset('img/montaña.jpg')}}" class="card-img-top" alt="..." width="300" height="200">
                        <div class="card-body">
                            <h5 class="card-title">Vinicunca</h5>
                            <p class="card-text">
                                Llamada también Montaña de Siete Colores, Montaña Arcoíris o Montaña de Colores, 
                                es una montaña del Perú con una altitud de 5.200 msnm.
                            </p>
                            <a href="#" class="btn btn-danger">Más información</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 mt-3">
                    <div class="card" >
                        <img src="{{asset('img/nasca.jpg')}}" class="card-img-top" alt="..." width="300" height="200">
                        <div class="card-body">
                            <h5 class="card-title">Líneas de Nazca</h5>
                            <p class="card-text">
                                Antiguos geoglifos1​ que se encuentran en las pampas de Jumana, en el desierto de Nazca, 
                                entre las poblaciones de Nazca y Palpa   
                            </p>
                            <a href="#" class="btn btn-danger">Más información</a>
                        </div>
                    </div>
                </div>
              </div>
        </div>
    </div>
@endsection


@section("footer")
@endsection


