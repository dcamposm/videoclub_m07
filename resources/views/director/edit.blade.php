@extends('layouts.master')

@section('content')

    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
           <div class="card">
              <div class="card-header text-center">
                 Modificar director
              </div>
              <div class="card-body" style="padding:30px">

                <form method="POST">
                 
                 {{method_field('PUT')}}
                    
                 {{ csrf_field() }}

                 <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{$director->name}}">
                 </div>

                 <div class="form-group">
                    <label for="lastname">Apellido</label>
                    <input type="text" name="lastname" id="lastname" class="form-control" value="{{$director->lastname}}">
                 </div>

                 <div class="form-group">
                    <label for="bday">Ano de nacimiento</label>
                    <input type="date" name="bday" id="bday" class="form-control" value="{{$director->bday}}">
                 </div>

                <div class="form-group">
                    <label for="nacionality">Nacionalitat:</label>
                    <select class="form-control" name="nacionality">
                        @foreach ($countries as $country)
                            <option value="{{ $country['iso_3166_1_alpha2'] }}" {{ $director->countries->iso == $country['iso_3166_1_alpha2'] ? 'selected' : ''}}>{{ $country['name'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="image">Foto</label>
                    <input type="text" name="image" id="image" class="form-control" value="{{$director->image}}">
                 </div>
                 <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                        Modificar director
                    </button>
                 </div>

                </form>

              </div>
           </div>
        </div>
     </div>
@stop
