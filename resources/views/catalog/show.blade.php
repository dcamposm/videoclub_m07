@extends('layouts.master')

@section('content')
    
    <div class="row">

        <div class="col-sm-4">

            <img src="{{$pelicula->poster}}" style="height:500px"/>

        </div>
        <div class="col-sm-8">

            <h2>{{$pelicula->title}}</h2>
            <h3>Año: {{$pelicula->year}} // Duración: {{$pelicula->time}}</h3>
            <h4>Director: <a href="{{url('/director/show/')}}/{{ $director->id }}">{{ $director->name }} {{ $director->lastname }}</a></h4>
            <p><strong>Country: </strong>{{ $country->name }}</p>
            <p><strong>Generos: </strong>
                @foreach ( $genresMovie as $genre )
                    @foreach ( $genresAll as $genresAllOne )
                        @if ($genre->id_genres == $genresAllOne->id) 
                            <a href="{{url('/genre/show/')}}/{{ $genresAllOne->id }}">{{$genresAllOne->name}}</a>
                        @endif
                    @endforeach
                @endforeach
            </p>
            <p><strong>Actores: </strong>
                @foreach ( $actorsMovie as $actor )
                    @foreach ( $actorsAll as $actorsAllOne )
                        @if ($actor->id_actor == $actorsAllOne->id) 
                            <a href="{{url('/actor/show/')}}/{{ $actorsAllOne->id }}">{{$actorsAllOne->name}} {{$actorsAllOne->lastname}}</a>
                        @endif
                    @endforeach
                @endforeach
            </p>
            <p><strong>Resumen: </strong> {{$pelicula->synopsis}}</p>
            @if( $pelicula->rented == 0 )
                <p><strong>Estado: </strong>Pelicula disponible</p>
                <form action="{{action('CatalogController@putRent', $pelicula->id)}}" 
                    method="POST" style="display:inline">
                    {{ method_field('PUT') }}
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-primary" style="display:inline">
                        Alquilar película
                    </button>
                </form>
            @else
                <p><strong>Estado: </strong>Película actualmente alquilada</p>
                <form action="{{action('CatalogController@putReturn', $pelicula->id)}}" 
                    method="POST" style="display:inline">
                    {{ method_field('PUT') }}
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-danger" style="display:inline">
                        Devolver película
                    </button>
                </form>
            @endif
            <form action="{{action('CatalogController@deleteMovie', $pelicula->id)}}" 
                    method="POST" style="display:inline">
                    {{ method_field('DELETE ') }}
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-outline-danger" style="display:inline">
                        Eliminar película
                    </button>
                </form>
            <a class="btn btn-warning" href="{{url('/catalog/edit')}}/{{ $pelicula->id }}" role="button"><span class="glyphicon glyphicon-list"></span>Editar película</a>
            <a class="btn btn-outline-dark" href="{{url('/catalog')}}" role="button">Volver al listado</a>
        </div>
        <div class="w-100 p-3">
            <div class="row" style="margin-top:40px">
                <div class="card w-100">
                    <div class="card-header text-center">
                        Comentarios
                    </div>
                    @foreach ( $CommentsMovie as $comment )
                        @foreach ( $clientsAll as $client )
                            @if ($comment->id_client == $client->id) 
                                <div class="card-body row">
                                    <div class="col-sm-3">
                                        <p><strong>Cliente: </strong> {{$client->name}} {{$client->lastname}}</p>
                                        <p><strong>Valoración: </strong>
                                            @for ($i = 0; $i < $comment->rate_movie; $i++)
                                                <img src="/img/starRate.png" width="20">
                                            @endfor
                                        <p><strong>Data: </strong> {{$comment->date_comment}}</p>
                                    </div>
                                    <div class="col-sm-9 ">
                                        <p><strong>Comentario: </strong> {{$comment->comment}}</p>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>
   </div>

@stop