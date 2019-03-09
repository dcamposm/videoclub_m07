@extends('layouts.master')

@section('content')

    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
           <div class="card">
              <div class="card-header text-center">
                 Modificar usuario
              </div>
              <div class="card-body" style="padding:30px">

                <form method="POST">
                 
                 {{method_field('PUT')}}
                    
                 {{ csrf_field() }}

                 <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{$user->name}}">
                 </div>

                 <div class="form-group">
                    <label for="email">Mail</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{$user->email}}">
                 </div>

                 <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" id="password" class="form-control" value="{{$user->password}}">
                 </div>

                 <div class="form-group">
                    <label for="rol">Rol</label>
                    <select name="rol" id="rol" class="form-control">
                        @foreach ($rols as $rol)
                                @if ($rol->id === $user->rol)
                                <option value="{{$rol->id}}" selected>{{$rol->name}}</option>
                                @else
                                <option value="{{$rol->id}}">{{$rol->name}}</option>
                                @endif
                        @endforeach
                    </select>
                 </div>

                 <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                        Modificar usuario
                    </button>
                 </div>

                </form>

              </div>
           </div>
        </div>
     </div>
@stop
