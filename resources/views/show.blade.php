<!doctype html>
<html >
    <head>
        <meta charset="utf-8">
        <title>Videoclubl</title>
    </head>
    <body>
        @extends('layouts.master')
        @section('content')
            <h1>Mostrar pelicula</h1>
            <div class="row"> 
                <div class="col-sm-4">
                    {{-- TODO: Imagen de la película --}}
                    <img src="{{$arrayPeliculas['poster']}}"/>
                </div>
                <div class="col-sm-8">
                    <h3>{{$arrayPeliculas['title']}}</h3> 
                    <p>Año: {{$arrayPeliculas['year']}}</p>
                    <p>Director: {{$arrayPeliculas['director']}}</p>
                    <p>Resumen: {{$arrayPeliculas['synopsis']}}</p>
                    @if ($arrayPeliculas['rented']==false) 
                        <p>Estado: Pelicula no alquilada</p>
                        <a class="btn btn-primary" href="#">Alquilar pelicula</a>
                    @else
                        <p>Estado: Pelicula alquilada</p>
                        <a class="btn btn-danger" href="#">Devolver pelicula</a>
                    @endif
                    <a class="btn btn-warning" href="{{ url('/catalog/edit/'.$idPeliculas ) }}">Editar pelicula</a>
                    <a class="btn btn-default" href="{{ url('/catalog') }}">Volver al listado</a>
                </div>
            </div>
        @stop
    </body>
</html>