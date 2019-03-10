@extends('layouts.master')

@section('content')
    
    <div class="row">

        <div class="col-sm-4">

            <img src="{{$actor->image}}" class="col"/>

        </div>
        <div class="col-sm-8">

            <h2>{{$actor->name}} {{$actor->lastname}}</h2>
            <h3>Birthday: {{$actor->bday}}</h3>
            @foreach ($countries as $country)
                @if ($actor->nationality == $country->id)
                    <h4>Nationality: {{$country->name}}</h4>
                @endif
            @endforeach
            <form action="{{action('ActorController@deleteActor', $actor->id)}}" 
                    method="POST" style="display:inline">
                    {{ method_field('DELETE ') }}
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-danger" style="display:inline">
                        Eliminar actor
                    </button>
                </form>
            <a class="btn btn-warning" href="{{url('/actor/edit')}}/{{ $actor->id }}" role="button"><span class="glyphicon glyphicon-list"></span>Editar actor</a>
            <a class="btn btn-outline-dark" href="{{url('/actor')}}" role="button">Volver al listado</a>
        </div>
        
        <div style="margin-top:40px">
            <h3>Filmografía:</h3>

            <div class="row">

                @foreach ($moviesActor as $movie_id)
                    @foreach ($moviesAll as $movie )
                        @if ($movie->id == $movie_id->id_movie)
                            <div class="card card-shadow m-3 text-center" style="min-width: 250px;">
                                <div class="card-header text-center">
                                    <a href="{{ url('/catalog/show/' . $movie->id ) }}">
                                    {{$movie->title}}
                                    </a>
                                </div>
                                <div class="card-body" style="padding:30px">
                                    <p><img src="{{$movie->poster}}" style="height:200px"/></p>
                                    <p><strong>Personaje:</strong> {{$movie_id->character}}</p>

                                </div>
                            </div>
                        @endif
                    @endforeach
                @endforeach

            </div>
        </div>

    </div>

@stop