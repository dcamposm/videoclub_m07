@extends('layouts.master')

@section('content')
<br>
    <div>
        <a href="{{ url('/client/create') }}" class="btn btn-primary">
            <span class="fas fa-user"></span>
             Añadir cliente 
        </a>
    </div>
<br>
    <div class="row">
        
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Dni</th>
            <th scope="col">Cliente</th>
            <th scope="col">Apellido</th>
            <th scope="col">Actiones</th>
          </tr>
        </thead>
        <tbody>
        @foreach( $client as $client )
            <tr>
                <th><a href="{{ url('/client/show/' . $client->id ) }}">{{$client->dni}}</a></th>
                <td>{{$client->name}}</td>
                <td>{{$client->lastname}}</td>
                <td>
                    <a href="{{ url('/client/edit')}}/{{ $client->id }} }}" class="btn btn-warning">
                        <span class="glyphicon glyphicon-list"></span> 
                        Modificar
                    </a>
                    <form action="{{action('ClientController@deleteClient', $client->id)}}" method="POST" style="display:inline">
                        {{ method_field('DELETE ') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-outline-danger" style="display:inline">
                            Eliminar
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    
    </div>

@stop

