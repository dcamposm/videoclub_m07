@extends('layouts.master')

@section('content')
<br>
    <div>
        <a href="{{ url('/genre/create') }}" class="btn btn-primary">
            <span class="fas fa-film"></span>
             Anadir generos
        </a>
    </div>
<br>
    <div class="row">
        
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Genero</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach( $genres as $genre )
            <tr>
                <th><a href="{{ url('/genre/show/' . $genre->id ) }}">{{$genre->name}}</a></th>
                <td>{{$genre->description}}</td>
                <td>
                    <a href="{{ url('/genre/edit')}}/{{ $genre->id }} }}" class="btn btn-warning">
                        <span class="glyphicon glyphicon-list"></span> 
                        Modificar
                    </a>
                    <form action="{{action('GenreController@deleteGenre', $genre->id)}}" method="POST" style="display:inline">
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

