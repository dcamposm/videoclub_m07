@extends('layouts.master')

@section('content')

    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
           <div class="card">
              <div class="card-header text-center">
                    Crear comentario
              </div>
              <div class="card-body" style="padding:30px">

                <form method="POST">
                    
                 {{ csrf_field() }}

                    <div class="row form-group">

                        <div class="col-md-6">
                            <label for="movie">Película</label>
                            <select class="form-control" name="movie" disabled>
                                @foreach ( $movies as $movie )
                                    @if ( $movie->id == $comment->id_movie )
                                        <option value="{{$movie->id}}" selected="true">{{$movie->title}}</option>
                                    @else
                                        <option value="{{$movie->id}}">{{$movie->title}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="client">Cliente</label>
                            <select class="form-control" name="client">
                                @foreach ( $clients as $client )
                                    @if ( $client->id == $comment->id_client )
                                        <option value="{{$client->id}}" selected="true">{{$client->name}} {{$client->lastname}}</option>
                                    @else
                                        <option value="{{$client->id}}">{{$client->name}} {{$client->lastname}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                    </div>

                    <div class="row form-group">

                        <div class="col-md-6">
                            <label class="w-100" for="rate">Valoración: &nbsp;&nbsp;<span id="rangeNumber" style="text-align: right;">3</span> estrellas</label>
                            <input class="col" type="range" class="form-control-range" name="rate" min="1" max="5" value="{{$comment->rate_movie}}" id="rate">
                        </div>
                        <div class="col-md-6">
                            <label for="dateComment">Data</label>
                            <input type="text" name="dateComment" id="dateComment" class="form-control" value="{{$comment->date}}" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="comment">Comentario</label>
                        <textarea name="comment" id="comment" class="form-control" rows="3">{{$comment->comment}}</textarea>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                            Crear comentario
                        </button>
                    </div>

                </form>

              </div>
           </div>
        </div>
     </div>


    <script>
        $(document).ready(function(){
            $("#rate").change(function(){
                $("#rangeNumber").text($("#rate").val());
            });
        });
    </script>

@stop
