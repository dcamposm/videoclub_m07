@extends('layouts.master')

@section('content')
    
    <div class="row">

        <div class="col-sm-4">

            <img src="{{$pelicula->poster}}" class="col"/>

        </div>
        <div class="col-sm-8">

            <h2>{{$pelicula->title}}</h2>
            <h3>Año: {{$pelicula->year}} // Duración: {{$pelicula->time}}</h3>
            <h4>Director: <a href="{{url('/director/show/')}}/{{ $director->id }}">{{ $director->name }} {{ $director->lastname }}</a></h4>
            <p><strong>Producida en: </strong>{{ $country->name }}</p>
            <p><strong>Generos: </strong>
                @foreach ( $genresMovie as $genre )
                    @foreach ( $genresAll as $genresAllOne )
                        @if ($genre->id_genre == $genresAllOne->id) 
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
                    <button type="submit" class="btn btn-outline-primary" style="display:inline">
                        Alquilar película
                    </button>
                </form>
            @else
                <p><strong>Estado: </strong>Película actualmente alquilada</p>
                <form action="{{action('CatalogController@putReturn', $pelicula->id)}}" 
                    method="POST" style="display:inline">
                    {{ method_field('PUT') }}
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-outline-danger" style="display:inline">
                        Devolver película
                    </button>
                </form>
            @endif
            <form action="{{action('CatalogController@deleteMovie', $pelicula->id)}}" 
                    method="POST" style="display:inline">
                    {{ method_field('DELETE ') }}
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-danger" style="display:inline">
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
                        <div class="row">
                            <a class="btn btn-primary btn-sm col-2 ml-2" href="{{url('/comment/create')}}/{{ $pelicula->id }}" role="button">
                                Añadir comentario
                            </a>
                            <span class="col">
                                Comentarios
                            </span>
                        </div>
                    </div>
                    @foreach ( $CommentsMovie as $comment )
                        @foreach ( $clientsAll as $client )
                            @if ($comment->id_client == $client->id) 
                                <div class="card-body row">
                                    <div class="col-sm-3">
                                        <p><strong>Cliente: </strong> <a href="{{url('/client/show/')}}/{{ $client->id }}">{{$client->name}} {{$client->lastname}}</a></p>
                                        <p><strong>Valoración: </strong>
                                            @for ($i = 0; $i < $comment->rate_movie; $i++)
                                                <img src="/img/starRate.png" width="20">
                                            @endfor
                                        <p><strong>Data: </strong> {{$comment->date_comment}}</p>
                                        <a class="btn btn-warning btn-sm col-9 ml-1" href="{{url('/comment/edit')}}/{{ $comment->id_movie }}/{{ $comment->id_client }}" role="button">
                                            Editar comentario
                                        </a>

                                        <form action="{{action('CommentController@deleteComment', array($comment->id_movie, $comment->id_client))}}" 
                                            method="POST" style="display:inline">
                                            {{ method_field('DELETE ') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm col-2 ml-2" style="display:inline">
                                                <span class="fas fa-trash"></span>
                                            </button>
                                        </form>
                                    </div>
                                    <div class="col-sm-9 ">
                                        <p><strong>Comentario: </strong> {{$comment->comment}}</p>
                                    </div>
                                </div>

                            @endif
                        @endforeach

                        @if (!$loop->last) 

                            <hr>

                        @endif
                    @endforeach
                </div>
            </div>
        </div>
   </div>

@stop