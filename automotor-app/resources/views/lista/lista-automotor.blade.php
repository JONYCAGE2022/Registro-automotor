@extends('layouts.plantilla')
@section('titulo', 'Lista automotor')
@section('contenido')
    <h1>Lista automotor</h1>
    <div class="container d-flex justify-content-center">
        <div class="mx-auto">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nombre y apellido del titular</th>
                        <th scope="col">Patente</th>
                        <th scope="col">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($autos as $auto)
                        <tr>
                            <td>{{ $auto->nombre_titular }}</td>
                            <td>{{ $auto->patente }}</td>
                            <td><button type="button" class="btn btn-info" onclick="window.location.href= '{{route('DetalleAutomotor',$auto->id)}}'" type="submit">Ver</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    {{-- Navigator --}}
    {{ $autos->links('pagination::bootstrap-5') }}

@endsection
