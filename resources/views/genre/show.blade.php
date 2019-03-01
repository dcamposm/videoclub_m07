@extends('layouts.master')

@section('content')
    <h2>{{$genre->name}}</h2>
    <h5>{{$genre->description}}</h5>
    <br>
    <div class="row">
      
    
    @foreach( $movies as $movie )
        @foreach( $moviesGenre as $genre )
            @if ($movie->id == $genre->id_movies)
                <div class="col-xs-6 col-sm-4 col-md-3 text-center">
                    <a href="{{ url('/catalog/show/' . $movie->id ) }}">
                        <img src="{{$movie->poster}}" style="height:200px"/>
                        <h4 style="min-height:45px;margin:5px 0 10px 0">
                            {{ $movie->title }}
                        </h4>
                    </a>
                </div>
            @endif
        @endforeach
    @endforeach

    </div>

@stop