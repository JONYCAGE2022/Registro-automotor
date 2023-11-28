@extends('layouts.plantilla')
@section('titulo', 'Detalle automotor')
@section('contenido')
    <h1>Detalle automotor</h1>

    <div class="container d-flex justify-content-center">
        <div class="mx-auto">
            <table class="table table-striped">
                <tr>
                    <th>Nombre y apellido del titular</th>
                    <td>{{ $detalleAuto ? $detalleAuto->nombre_titular : '' }}</td>
                </tr>
                <tr>
                    <th>Patente</th>
                    <td>{{ $detalleAuto ? $detalleAuto->patente : ''}}</td>
                </tr>
                <tr>
                    <th>Marca</th>
                    <td>{{ $detalleAuto ? $detalleAuto->marca : ''}}</td>
                </tr>
                <tr>
                    <th>Modelo</th>
                    <td>{{ $detalleAuto ? $detalleAuto->modelo : ''}}</td>
                </tr>
                <tr>
                    <th>Tipo</th>
                    <td>{{ $detalleAuto ? $detalleAuto->tipo : '' }}</td>
                </tr>
            </table>
        </div>
    </div>
    <button class="btn btn-secondary" onclick="window.location.href= '{{ route('ListaAutomotor') }}'"
        type="submit">Volver</button>
@endsection
