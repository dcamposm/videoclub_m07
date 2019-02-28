@extends('layouts.master')

@section('content')
    
    <div class="row">

    <div class="col-sm-4">

        <img src="{{$director->poster}}" style="height:500px"/>

    </div>
    <div class="col-sm-8">

        <h2>{{$director->name}} {{$director->lastname}}</h2>
        <h3>Año de nacimiento: {{$director->bday}}</h3>
        @foreach ($countries as $country)
            @if ($director->nacionality == $country->id)
                <h4>Nacionalidad: {{$country->name}}</h4>
            @endif
        @endforeach
        <form action="{{action('DirectorController@deleteDirector', $director->id)}}" 
                method="POST" style="display:inline">
                {{ method_field('DELETE ') }}
                {{ csrf_field() }}
                <button type="submit" class="btn btn-outline-danger" style="display:inline">
                    Eliminar director
                </button>
            </form>
        <a class="btn btn-warning" href="{{url('/director/edit')}}/{{ $director->id }}" role="button"><span class="glyphicon glyphicon-list"></span>Editar director</a>
        <a class="btn btn-outline-dark" href="{{url('/director')}}" role="button">Volver al listado</a>
    </div>
    </div>

@stop