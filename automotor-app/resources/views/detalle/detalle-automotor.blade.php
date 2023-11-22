@extends('layouts.plantilla')
@section('titulo', 'Detalle automotor')
@section('contenido')
    <h1>Detalle automotor</h1>

    <div class="container d-flex justify-content-center">
        <div class="mx-auto">
            <table class="table table-striped">
                <tr>
                    <th>Nombre y apellido del titular</th>
                    <td>{{ $detalleAuto->nombre_titular }}</td>
                </tr>
                <tr>
                    <th>Patente</th>
                    <td>{{ $detalleAuto->patente }}</td>
                </tr>
                <tr>
                    <th>Marca</th>
                    <td>{{ $detalleAuto->marca }}</td>
                </tr>
                <tr>
                    <th>Modelo</th>
                    <td>{{ $detalleAuto->modelo }}</td>
                </tr>
            </table>
        </div>
    </div>
    <button class="btn btn-secondary" onclick="window.location.href= '{{ route('ListaInfraccion') }}'"
        type="submit">Volver</button>
@endsection
