@extends('layouts.master')

@section('content')

    <div class="row">

    <div class="col-sm-4">

        <img src="{{$arrayPeliculas['poster']}}" style="height:500px"/>

    </div>
    <div class="col-sm-8">

        <h2>{{$arrayPeliculas['title']}}</h2>
        <h3>Any: {{$arrayPeliculas['year']}}</h3>
        <h4>Director: {{$arrayPeliculas['director']}}</h4>
        <p><strong>Resumen: </strong> {{$arrayPeliculas['synopsis']}}</p>
        @if( $arrayPeliculas['rented'] === false )
            <p><strong>Estado: </strong>Pelicula disponible</p>
            <a class="btn btn-primary" href="#" role="button">Alquilar película</a>
        @else
            <p><strong>Estado: </strong>Película actualmente alquilada</p>
            <a class="btn btn-danger" href="#" role="button">Devolver película</a>
        @endif
        <a class="btn btn-warning" href="{{url('/catalog/edit')}}/{{ $id }}" role="button"><span class="glyphicon glyphicon-list"></span>Editar película</a>
        <a class="btn btn-outline-dark" href="{{url('/catalog')}}" role="button">Volver al listado</a>
    </div>
    </div>

@stop