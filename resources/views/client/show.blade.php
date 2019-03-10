@extends('layouts.master')

@section('content')
    
    <div class="row">

        <div class="col-sm-4">

            <img src="{{ asset('img/client.png') }}" class="col"/>

        </div>
        <div class="col-sm-8">

            <h2>{{$client->name}} {{$client->lastname}}</h2>
            <h3>DNI: {{$client->dni}}</h3>

		    <h4>Fecha de nacimiento: {{$client->bday}}</h4>
	        @foreach ($countries as $country)
	            @if ($client->nacionality == $country->id)
	            <h4>Nacionalidad: {{$country->name}}</h4>
	            @endif
	        @endforeach
		    <h4>Dirección: {{$client->address}}</h4>
            <form action="{{action('ClientController@deleteClient', $client->id)}}" 
                    method="POST" style="display:inline">
                    {{ method_field('DELETE ') }}
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-danger" style="display:inline">
                        Eliminar cliente
                    </button>
                </form>
            <a class="btn btn-warning" href="{{url('/client/edit')}}/{{ $client->id }}" role="button"><span class="glyphicon glyphicon-list"></span>Editar cliente</a>
            <a class="btn btn-outline-dark" href="{{url('/client')}}" role="button">Volver al listado</a>
        </div>

        <div class="w-100 p-3">
            <div class="row" style="margin-top:40px">
                <div class="card w-100">
                    <div class="card-header text-center">
                        <div class="row">
                            <span class="col">
                                Comentarios
                            </span>
                        </div>
                    </div>
                    @foreach ( $commentsMovie as $comment )
                        @foreach ( $moviesAll as $movie )
                            @if ($comment->id_movie == $movie->id) 
                                <div class="card-body row">
                                    <div class="col-sm-3">
                                        <p><strong>Película: </strong> <a href="{{url('/catalog/show/')}}/{{ $movie->id }}">{{$movie->title}}</a></p>
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