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
        @foreach($posts as $post)
        <div class="row md-4 justify-content-md-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card card-body">
                        <h5 class="card-title">
                            <a href="{{action('PostController@show', $post->id)}}">{{$post->title}}</a>
                        </h5>
                    </div>
                    <img src="{{asset($post->image)}}" class="card-img-top" alt="...">
                </div>
            </div>
        </div>
        @endforeach
    </div>
</body>
</html>