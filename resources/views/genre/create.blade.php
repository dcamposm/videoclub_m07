@extends('layouts.master')

@section('content')

    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
           <div class="card">
              <div class="card-header text-center">
                 Anadir genero
              </div>
              <div class="card-body" style="padding:30px">

                <form method="POST">

                 {{ csrf_field() }}

                 <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" name="name" id="name" class="form-control">
                 </div>

                 <div class="form-group">
                    <label for="description">Descripcion</label>
                    <textarea name="description" id="description" class="form-control" rows="3"></textarea>
                 </div>

                 <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                        Anadir genero
                    </button>
                 </div>

                </form>

              </div>
           </div>
        </div>
     </div>


@stop