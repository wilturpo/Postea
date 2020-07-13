@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Plaza de armas de Arequipa</h2></div>

                <div class="card-body">
                <img src="{{asset('img/plaza-armas.jpg')}}" class="img-fluid" alt="Responsive image">
                Arequipa está regida por sus volcanes. Lo vemos en las paredes de sus calles, edificios e iglesias; 
                en la geografía maravillosa que nos regala un valle fértil y unos profundos cañones. 
                <br>
                Arequipa es un lugar para quedarse, por su comida única, por su historia, por su majestuosa cordialidad.
                Arequipa, la ciudad blanca legendaria e histórica, donde la nobleza se respira bajo la vigilancia eterna de sus volcanes.
                </div>
                <br>
                <div class="form-group">
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Comenta">
                </div>


                <div  class="text-right"> 
                    <button type="button" class="btn btn-outline-primary btn-right">Enviar</button>
                </div>

                <div> 
                    <h4>Comentarios:</h4><hr>

                    <p>
                        Particularmente pienso que Arequipa es una de las cuidades más bonitas del Perú,
                        sin embargo con el aumento de vehículos a veces es imposible dirigirse de un lugar
                        a otro.
                    </p>
                    <p class="text-right">Hetty</p>
                    
                    <p>
                        Esa foto solo es de un lugar de Arequipa, si empiezan a conocer más de esta hermosa ciudad
                        querrán volver siempre que se pueda.
                    </p>
                    <p class="text-right">Carol</p>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
