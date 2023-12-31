@extends('layouts.plantilla')
@section('titulo', 'Lista infracciones')
@section('contenido')
    <h1>Lista infracción</h1>
    <div class="container d-flex justify-content-center">
        <div class="mx-auto">
            <form class="d-flex" role="search" action="{{ route('BuscarInfraccion') }}" method="GET">
                <input class="form-control me-2" type="text" placeholder="Buscar por patente" aria-label="Buscar" name="buscar"
                    value="{{ request('buscar') }}">
                <button class="btn btn-outline-dark" type="submit"
                    nclick="window.location.href= '{{ route('ListaInfraccion') }}'">Buscar</button>
            </form>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Auto: tipo/patente</th>
                        <th scope="col">Accion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($infracciones as $infraccion)
                        <tr>
                            <td>{{ $infraccion->tipo_patente_autos }}</td>
                            <td> <button type="button" class="btn btn-info" onclick="window.location.href= '{{route('DetalleInfraccion',$infraccion->id)}}'" type="submit">Ver</button> </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{-- Navigator --}}
    <div class="container" id="nav">
        {{ $infracciones->links('pagination::bootstrap-5') }}
    </div>
@endsection
