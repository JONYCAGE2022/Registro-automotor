@extends('layouts.plantilla')
@section('titulo', 'Pantalla principal')
@section('contenido')
    <h1>Lista automotor</h1>
    @@foreach ($autos as $auto)
        {{auto[marca]}}
    @endforeach
@endsection