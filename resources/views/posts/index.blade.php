@extends('layouts.app')

@section('content')
<div class="container">
    @auth
        <a class="btn btn-success"  href="{{action('PostController@userPosts')}}" role="button">Ver mis publicaciones</a>
    @endauth
    @foreach($publicaciones as $publicacion)
    <div class="row md-4 justify-content-md-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card card-body">
                    <h5 class="card-title">
                        <a href="{{action('PostController@show', $publicacion->id)}}">{{$publicacion->title}}</a>
                    </h5>
                </div>
                <!---<img src="{{asset($publicacion->image)}}" class="card-img-top" alt="...">-->
                <img src="{{asset($publicacion->image)}}" class="card-img-top" alt="...">
                <!--<img src="{{Storage::url($publicacion->image)}}" class="card-img-top" alt="...">-->
            </div>
        </div>
    </div>
    @endforeach
    {{$publicaciones->links()}}
</div>
@endsection