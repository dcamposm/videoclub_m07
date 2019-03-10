@extends('layouts.master')

@section('content')
    <h2><blank>{{$client->name}} {{$client->lastname}}</blank></h2>
    <h5>{{$client->dni}}</h5>
    <br>
    <h6>Fecha de nacimiento: {{$client->bday}}</h6>
    <h6>Nacionalidad: {{$client->nacionality}}</h6>
    <h6>Dirección: {{$client->address}}</h6>
    

@stop