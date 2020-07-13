@extends('layouts.app')

@section('content')
<div class="container">
    @auth
        <a class="btn btn-primary"  href="{{action('PostController@index')}}" role="button">Ver todas las publicaciones</a>
    @endauth
    @foreach($publicaciones as $publicacion)
    <br>
    <div class="row md-4 justify-content-md-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card card-body">
                    <h5 class="card-title">
                        <a href="{{action('PostController@show', $publicacion->id)}}">{{$publicacion->title}}</a>
                    </h5>                    
                </div>
                <img src="{{asset($publicacion->image)}}" class="card-img-top" alt="...">  

                <form action="{{ action('PostController@delete') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <input id="id" name="id" value="{{ $publicacion->id}}" type="hidden">
                    <div>
                        <button type="submit" class="btn btn-danger">Eliminar publicación</button>
                    </div>                
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection