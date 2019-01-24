<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>Videoclubl</title>
    </head>
    <body>
        @extends('layouts.master')
        @section('content')
        <h1>Añadir película</h1>
            <div class="row" style="margin-top:40px">
               <div class="offset-md-3 col-md-6">
                  <div class="card">
                     <div class="card-header text-center">
                        Añadir película
                     </div>
                     <div class="card-body" style="padding:30px">

                       <form action=# method="POST">
                          {{method_field('POST')}}
                          {{ csrf_field() }}


                        <div class="form-group">
                           <label for="title">Título</label>
                           <input type="text" name="title" id="title" class="form-control">
                        </div>

                        <div class="form-group">
                           <label for="year">Año</label>
                           <input type="text" name="year" id="year" class="form-control">
                        </div>

                        <div class="form-group">
                           <label for="director">Director</label>
                           <input type="text" name="director" id="director" class="form-control">
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
                               Añadir película
                           </button>
                        </div>

                        </form>

                     </div>
                  </div>
               </div>
            </div>
        @stop
    </body>
</html>