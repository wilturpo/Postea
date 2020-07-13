<link rel="stylesheet" href="{{asset('css/estilos.css')}}">

@extends("layouts.plantilla")

@section("cabecera")
<div class="card mb-3">
    <img src="{{asset('img/Arequipa.jpg')}}" class="card-img-top" alt="Responsive image">
    <div class="card-body">
        <h2 style="text-align: center;font-size:8vw;color:rgb(216, 43, 43)">Arequipa</h2>
        <p class="card-text">
            Arequipa está regida por sus volcanes. Lo vemos en las paredes de sus calles, edificios e iglesias; 
            en la geografía maravillosa que nos regala un valle fértil y unos profundos cañones. 
            ¿Te imaginas disfrutar de un baño termal mientras observas las montañas verdes coronadas por nieves eternas?
            <br>
            Arequipa es un lugar para quedarse, por su comida única, por su historia, por su majestuosa cordialidad.
            Arequipa, la ciudad blanca legendaria e histórica, donde la nobleza se respira bajo la vigilancia eterna de sus volcanes.
            ¡Tu destino infaltable!
        </p>
      <p class="card-text">
            <small class="text-muted">
          
            </small>
        </p>
    </div>
</div>

<div class="jumbotron text-center">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 mt-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('img/plaza-armas.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">
                            Una de sus principales atracciones es la plaza de armas
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 mt-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('img/canion.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">
                            Se puede visitar el cañon del colca que está a unas horas de la ciudad
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 mt-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('img/mirador.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">
                            Si se desea puede ir al mirador da Yanahuara
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section("footer")
@endsection