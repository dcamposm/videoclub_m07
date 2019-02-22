@extends('layouts.master')

@section('content')
    
    <div class="row">

    <div class="col-sm-4">

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
                <button type="submit" class="btn btn-outline-danger" style="display:inline">
                    Eliminar actor
                </button>
            </form>
        <a class="btn btn-warning" href="{{url('/actor/edit')}}/{{ $actor->id }}" role="button"><span class="glyphicon glyphicon-list"></span>Editar actor</a>
        <a class="btn btn-outline-dark" href="{{url('/actor')}}" role="button">Volver al listado</a>
    </div>
    </div>

@stop