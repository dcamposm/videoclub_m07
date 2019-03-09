@extends('layouts.master')

@section('content')
<br>
    <div>
        <a href="{{ url('/actor/create') }}" class="btn btn-primary">
            <span class="fas fa-user-tie"></span>
            Añadir actor
        </a>
    </div>
<br>

    <div class="row">

    @foreach( $actor as $actor )
    <div class="col-xs-6 col-sm-4 col-md-3 text-center">

        <a href="{{ url('/actor/show/' . $actor->id ) }}">
            <img src="{{$actor->image}}" style="height:200px"/>
            <h4 style="min-height:45px;margin:5px 0 10px 0">
                {{$actor->name}} {{$actor->lastname}}
            </h4>
        </a>

    </div>
    @endforeach

    </div>

@stop

