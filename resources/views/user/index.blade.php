@extends('layouts.master')

@section('content')
<br>
    <div>
        <a href="{{ url('/user/create') }}" class="btn btn-primary">
            <span class="fas fa-address-book"></span>
            Añadir usuario
        </a>
    </div>
<br>

    <div class="row">

    @foreach( $user as $user )
    <div class="col-xs-6 col-sm-4 col-md-3 text-center">
        
        <img src="{{$user->image}}" style="height:200px"/>
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

