@extends('layouts.master')

@section('content')
    
    <div class="row">

    <div class="col-sm-4">

        <img src="{{$pelicula->poster}}" style="height:500px"/>

    </div>
    <div class="col-sm-8">

        <h2>{{$pelicula->title}}</h2>
        <h3>Any: {{$pelicula->year}}</h3>
        <h4>Director: {{$pelicula->director}}</h4>
        <p><strong>Resumen: </strong> {{$pelicula->synopsis}}</p>
        @if( $pelicula->rented == 1 )
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
    </div>

@stop