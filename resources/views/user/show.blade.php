@extends('layouts.master')

@section('content')
    
    <div class="row">

        <div class="col-sm-4">

            <img src="{{$user->image}}" class="col"/>

        </div>
        <div class="col-sm-8">

            <h2>{{$user->name}}</h2>
            <h3>Mail: {{$user->email}}</h3>
            @foreach ($rol as $rol)
                @if ($user->rol == $rol->id)
                    <h4>Rol: {{$rol->name}}</h4>
                @endif
            @endforeach
            <form action="{{action('UserController@deleteUser', $user->id)}}" 
                    method="POST" style="display:inline">
                    {{ method_field('DELETE ') }}
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-danger" style="display:inline">
                        Eliminar usuario
                    </button>
                </form>
            <a class="btn btn-warning" href="{{url('/user/edit')}}/{{ $user->id }}" role="button"><span class="glyphicon glyphicon-list"></span>Editar usuario</a>
            <a class="btn btn-outline-dark" href="{{url('/user')}}" role="button">Volver al listado</a>
        </div>

    </div>

@stop