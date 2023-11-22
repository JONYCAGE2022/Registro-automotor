@extends('layouts.plantilla')
@section('titulo', 'Pantalla principal')
@section('contenido')
    <h1>Lista automotor</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nombre y apellido del titular</th>
                <th scope="col">Marca</th>
                <th scope="col">Modelo</th>
                <th scope="col">Patente</th>
                <th scope="col">Tipo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($autos as $auto)
                <tr>
                    <td>{{ $auto->nombre_titular }}</td>
                    <td>{{ $auto->marca }}</td>
                    <td>{{ $auto->modelo }}</td>
                    <td>{{ $auto->patente }}</td>
                    <td>{{ $auto->tipo }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $autos->links() }}
@endsection
