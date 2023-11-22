@extends('layouts.plantilla')
@section('titulo', 'Pantalla principal')
@section('contenido')
    <h1>Lista titular</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Apellido</th>
                <th scope="col">Nombre</th>
                <th scope="col">DNI</th>
                <th scope="col">Domicilio</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($titulares as $titular)
                <tr>
                    <td>{{ $titular->apellido }}</td>
                    <td>{{ $titular->nombre }}</td>
                    <td>{{ $titular->dni }}</td>
                    <td>{{ $titular->domicilio }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $titulares->links() }}
@endsection
