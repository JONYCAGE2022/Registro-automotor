@extends('layouts.plantilla')
@section('titulo', 'Detalle infracción')
@section('contenido')
    <h1>Detalle infracción</h1>

    <div class="container d-flex justify-content-center">
        <div class="mx-auto">
            <table class="table table-striped">
                <tr>
                    <th>Auto: tipo/patente</th>
                    <td>{{ $detalleInfraccion ? $detalleInfraccion->tipo_patente_autos : ''}}</td>
                </tr>
                <tr>
                    <th>Fecha</th>
                    <td>{{ $detalleInfraccion ? $detalleInfraccion->fecha : ''}}</td>
                </tr>
                <tr>
                    <th>Descripción</th>
                    <td>{{ $detalleInfraccion ? $detalleInfraccion->desripcion : ''}}</td>
                </tr>
                <tr>
                    <th>Tipo</th>
                    <td>{{ $detalleInfraccion ? $detalleInfraccion->tipo : ''}}</td>
                </tr>
            </table>
        </div>
    </div>
    <button class="btn btn-secondary" onclick="window.location.href= '{{ route('ListaInfraccion') }}'"
        type="submit">Volver</button>
@endsection
