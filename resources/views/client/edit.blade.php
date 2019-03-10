@extends('layouts.master')

@section('content')

    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
           <div class="card">
              <div class="card-header text-center">
                 Añadir cliente
              </div>
              <div class="card-body" style="padding:30px">

                <form method="POST">
                 
                 {{method_field('PUT')}}

                 {{ csrf_field() }}
                  
                 <div class="form-group">
                    <label for="dni">Dni</label>
                    <input type="text" name="dni" id="dni" class="form-control" value="{{$client->dni}}">
                 </div>

                 <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{$client->name}}">
                 </div>

                 <div class="form-group">
                    <label for="lastname">Apellido</label>
                    <input type="text" name="lastname" id="lastname" class="form-control" value="{{$client->lastname}}">
                 </div>

                 <div class="form-group">
                    <label for="bday">Fecha de nacimiento</label>
                    <input type="date" name="bday" id="bday" class="form-control" value="{{$client->bday}}">
                 </div>

                 <div class="form-group">
                    <label for="nacionality">Nacionalidad</label>
                    <select class="form-control" name="nacionality">
                        @foreach ($countries as $country)
                            <option value="{{ $country['iso_3166_1_alpha2'] }}">{{ $country['name'] }}</option>
                        @endforeach
                    </select>
                 </div>

                 <div class="form-group">
                    <label for="address">Dirección</label>
                    <input type="text" name="address" id="address" class="form-control" value="{{$client->address}}">
                 </div>

                 <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                        Añadir cliente
                    </button>
                 </div>

                </form>

              </div>
           </div>
        </div>
     </div>

@stop
