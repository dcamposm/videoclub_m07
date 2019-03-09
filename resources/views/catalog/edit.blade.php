@extends('layouts.master')

@section('content')

    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
           <div class="card">
              <div class="card-header text-center">
                 Modificar pelicula
              </div>
              <div class="card-body" style="padding:30px">

                <form method="POST">
                 
                 {{method_field('PUT')}}
                    
                 {{ csrf_field() }}

                    <div class="form-group">
                        <label for="title">Titulo</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{$pelicula->title}}">
                    </div>

                    <div class="row form-group">

                        <div class="col-md-6">
                            <label for="year">Año</label>
                            <input type="text" name="year" id="year" class="form-control" value="{{$pelicula->year}}">
                        </div>
                        <div class="col-md-6">
                            <label for="time">Duración</label>
                            <input type="text" name="time" id="time" class="form-control" value="{{$pelicula->time}}">
                        </div>

                    </div>

                    <div class="row form-group">

                        <div class="col-md-6">
                            <label for="director">Director</label>
                            <select class="form-control" name="director">
                                @foreach ( $directors as $director )
                                    @if ( $director->id == $pelicula->director )
                                        <option value="{{$director->id}}" selected="true">{{$director->name}} {{$director->lastname}}</option>
                                    @else
                                        <option value="{{$director->id}}">{{$director->name}} {{$director->lastname}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="year">Producida en</label>
                            <select class="form-control" name="country">
                                @foreach ( $countries as $country )
                                    @if ( $country->id == $pelicula->country )
                                        <option value="{{$country->id}}" selected="true">{{$country->name}}</option>
                                    @else
                                        <option value="{{$country->id}}">{{$country->name}}</option>
                                    @endif
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
                                    @if ($genre["exists"])
                                        <input type="checkbox" name="genre[]" value="{{$genre['id']}}" id="genre-{{$genre['id']}}" checked/>
                                    @else
                                        <input type="checkbox" name="genre[]" value="{{$genre['id']}}" id="genre-{{$genre['id']}}"/>
                                    @endif
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
                                    @if ($actor["exists"])
                                        <input type="checkbox" name="actor[]" value="{{$actor['id']}}" id="actor-{{$actor['id']}}" checked/>
                                    @else
                                        <input type="checkbox" name="actor[]" value="{{$actor['id']}}" id="actor-{{$actor['id']}}"/>
                                    @endif
                                    <label for="actor-{{$actor['id']}}">{{$actor['name']}} {{$actor['lastname']}}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="poster">Poster</label>
                        <input type="text" name="poster" id="poster" class="form-control"  value="{{$pelicula->poster}}">
                    </div>

                    <div class="form-group">
                        <label for="synopsis">Resumen</label>
                        <textarea name="synopsis" id="synopsis" class="form-control" rows="3">{{$pelicula->synopsis}}</textarea>
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
