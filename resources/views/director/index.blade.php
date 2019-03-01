@extends('layouts.master')

@section('content')
<br>
    <div>
        <a href="{{ url('/director/create') }}" class="btn btn-primary">
            <span class="fas fa-address-book"></span>
            Añadir director
        </a>
    </div>
<br>
    <div class="row">
        
        
    @foreach( $directors as $director )
    
    <div class="col-xs-6 col-sm-4 col-md-3 text-center">
        <a href="{{ url('/director/show/' . $director->id ) }}">
            <h4 style="min-height:45px;margin:5px 0 10px 0">
                {{$director->name}} {{$director->lastname}}
            </h4>
        </a>
    </div>
    @endforeach

    </div>

@stop

