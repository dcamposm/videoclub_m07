@extends('layouts.master')

@section('content')
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

