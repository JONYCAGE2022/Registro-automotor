@extends('layouts.plantilla')
@section('titulo', 'Pantalla principal')
@section('contenido')
    <h1>Lista infracción</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Auto: tipo/patente</th>
                <th scope="col">Fecha</th>
                <th scope="col">Descripción</th>
                <th scope="col">Tipo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($infraccciones as $infraccion)
                <tr>
                    <td>{{ $infraccion->tipo_patente_autos }}</td>
                    <td>{{ $infraccion->fecha }}</td>
                    <td>{{ $infraccion->desripcion }}</td>
                    <td>{{ $infraccion->tipo }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $infraccciones->links() }}
@endsection