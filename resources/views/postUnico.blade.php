<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
    <title>Mi app de Laravel</title>
</head>
<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
            <h1 class="display-4">¡POSTEA!</h1>
        </div>
    </div>

    <div class="container">
        <div class="row md-4 justify-content-md-center">
            <div class="col-md-8">
                <div class="card">
                    <img src="{{asset($post->image)}}" class="card-img-top" alt="...">
                    <div class="card card-body">
                        <h5 class="card-title">
                            {{$post->title}}
                        </h5>
                        <h6 class="card-subtitle mb-2 text-muted">
                            {{$post->created_at}}
                        </h6>
                        <p class="card-text">
                            {{$post->content}}
                        </p>
                        <a href="{{action('PostController@index')}}" class="card-link">Todas las publicaciones</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>