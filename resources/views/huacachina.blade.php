<link rel="stylesheet" href="{{asset('css/estilos.css')}}">

@extends("layouts.plantilla")

@section("cabecera")
<div class="card mb-3">
    <img src="{{asset('img/huacachina.jpg')}}" class="card-img-top" alt="Responsive image">
    <div class="card-body">
        <h2 style="text-align: center;font-size:8vw;color:rgb(216, 43, 43)">Ica-Huacachina</h2>
        <p class="card-text">
            En Ica destaca la agricultura extensiva y la agroexportación articulada alrededor de la producción en el valle, 
            situado en medio del Desierto del Pacífico. Son importantes el cultivo de uvas, espárragos, palmeras datileras, 
            nueces de pecán, algodón, mangos, paltas, entre otros muchos productos, muchos de los cuales convierten al valle 
            en uno de los más exitosos casos de agro-exportación.
            <br><br>
            El oasis de Huacachina, ubicado a 5 km de la ciudad de Ica está rodeado de grandes dunas de arena, adecuadas 
            para practicar el deporte denominado sandboard, así como otros deportes de aventura. Los primeros habitantes 
            se asentaron en la región Ica hace unos 9000 años. El "hombre de Paracas", descubierto en las Pampas de 
            Santo Domingo, data del año 6870 a. C. constituyendo el segundo horticultor más antiguo del Perú.
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
                    <img src="{{asset('img/huacachina.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">
                            Es un oasis para las mejores vacaciones deseadas durante cualquier
                            época del año.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 mt-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('img/h1.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">
                            Puede practicar surfing en arena de una forma segura y sobre todo
                            divertida
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 mt-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('img/h2.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">
                            El agua proviene de rios subterráneos por lo cual siempre
                            se va renovando
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