@extends('layouts.plantilla')
@section('titulo', 'Detalle titular')
@section('contenido')
    <h1>Detalle titular</h1>

    <div class="container d-flex justify-content-center">
        <div class="mx-auto">
            <table class="table table-striped">
                <tr>
                    <th>Nombre y apellido del titular</th>
                    <td>{{ $detalleTitular ? $detalleTitular->nombre_titular : ''}}</td>
                </tr>
                <tr>
                    <th>DNI</th>
                    <td>{{ $detalleTitular ? $detalleTitular->dni : ''}}</td>
                </tr>
                <tr>
                    <th>Domicilio</th>
                    <td>{{ $detalleTitular ? $detalleTitular->domicilio : ''}}</td>
                </tr>
            </table>
        </div>
    </div>
    <button class="btn btn-secondary" onclick="window.location.href= '{{ route('ListaTitular') }}'"
        type="submit">Volver</button>
@endsection

