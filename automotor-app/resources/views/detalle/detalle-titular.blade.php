@extends('layouts.plantilla')
@section('titulo', 'Detalle titular')
@section('contenido')
    <h1>Detalle titular</h1>

    <div class="container d-flex justify-content-center">
        <div class="mx-auto">
            <table class="table table-striped">
                <tr>
                    <th>Nombre y apellido del titular</th>
                    <td>{{ $detalleTitular->nombre_titular }}</td>
                </tr>
                <tr>
                    <th>DNI</th>
                    <td>{{ $detalleTitular->dni }}</td>
                </tr>
                <tr>
                    <th>Domicilio</th>
                    <td>{{ $detalleTitular->domicilio }}</td>
                </tr>
            </table>
        </div>
    </div>
    <button class="btn btn-secondary" onclick="window.location.href= '{{ route('ListaInfraccion') }}'"
        type="submit">Volver</button>
@endsection

