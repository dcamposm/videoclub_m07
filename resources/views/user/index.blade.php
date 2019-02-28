@extends('layouts.master')

@section('content')

    <div class="row">

    @foreach( $user as $user )
    <div class="col-xs-6 col-sm-4 col-md-3 text-center">
        
        <h4>{{$user->name}}</h4>
        <a href="{{ url('/user/show/' . $user->id ) }}">
            <h4 style="min-height:45px;margin:5px 0 10px 0">
                {{$user->email}}
            </h4>
        </a>

    </div>
    @endforeach

    </div>

@stop

