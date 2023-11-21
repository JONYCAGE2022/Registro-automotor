@extends('layouts.plantilla')
@section('titulo', 'Pantalla principal')
@section('contenido')
    {{-- Sección Principal --}}
    <section class="Principal">
        <div class="container-fluid text-center">
            <div class="row">
                <div class="col">
                    <h1>REGISTRO AUTOMOTOR</h1>
                    <img src="{{ asset('img/Portada automotor.jpg') }}" alt="imagen principal" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
@endsection
