@extends('layouts.master')

@section('content')

    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
           <div class="card">
              <div class="card-header text-center">
                    Crear pelicula
              </div>
              <div class="card-body" style="padding:30px">

                <form method="POST">
                 
                 {{method_field('PUT')}}
                    
                 {{ csrf_field() }}

                    <div class="form-group">
                        <label for="title">Titulo</label>
                        <input type="text" name="title" id="title" class="form-control">
                    </div>

                    <div class="row form-group">

                        <div class="col-md-6">
                            <label for="year">Año</label>
                            <input type="text" name="year" id="year" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="time">Duración</label>
                            <input type="text" name="time" id="time" class="form-control">
                        </div>

                    </div>

                    <div class="row form-group">

                        <div class="col-md-6">
                            <label for="director">Director</label>
                            <select class="form-control" name="director">
                                @foreach ( $directors as $director )
                                    <option value="{{$director->id}}">{{$director->name}} {{$director->lastname}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="year">Producida en</label>
                            <select class="form-control" name="country">
                                @foreach ( $countries as $country )
                                    <option value="{{$country->id}}">{{$country->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="slideDisplayEffect">
                            <label class="text-primary">Generos</label>
                        </div>
                        <div class="funkyradio row">
                            @foreach ( $genres as $genre )
                                <div class="funkyradio-primary col-md-6">
                                    <input type="checkbox" name="genre[]" value="{{$genre['id']}}" id="genre-{{$genre['id']}}"/>
                                    <label for="genre-{{$genre['id']}}">{{$genre['name']}}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="slideDisplayEffect">
                            <label class="text-primary">Actores</label>
                        </div>
                        <div class="funkyradio row">
                            @foreach ( $actors as $actor )
                                <div class="funkyradio-primary col-md-6">
                                    <input type="checkbox" name="actor[]" value="{{$actor['id']}}" id="actor-{{$actor['id']}}"/>
                                    <label for="actor-{{$actor['id']}}">{{$actor['name']}} {{$actor['lastname']}}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="poster">Poster</label>
                        <input type="text" name="poster" id="poster" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="synopsis">Resumen</label>
                        <textarea name="synopsis" id="synopsis" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                            Modificar pelicula
                        </button>
                    </div>

                </form>

              </div>
           </div>
        </div>
     </div>


    <script>
        $(document).ready(function(){
            $(".slideDisplayEffect").click(function(){
                //$(this).next().slideToggle();
                if ( $(this).next().is( ":hidden" ) ) {

                    $(this).next().show();

                } else {

                    $(this).next().hide();

                }
            });
        });
    </script>

@stop