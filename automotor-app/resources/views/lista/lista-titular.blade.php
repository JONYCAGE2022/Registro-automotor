@extends('layouts.plantilla')
@section('titulo', 'Lista titular')
@section('contenido')
    <h1>Lista titular</h1>

    <div class="container d-flex justify-content-center">
        <div class="mx-auto">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nombre y apellido</th>
                        <th scope="col">DNI</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($titulares as $titular)
                        <tr>
                            <td>{{ $titular->nombre_titular }}</td>
                            <td>{{ $titular->dni }}</td>
                            <td><button type="button" class="btn btn-info" type="submit" onclick="window.location.href= '{{route('DetalleTitular',$titular->id)}}'">Ver</button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div> 
{{-- Navigator --}} 
<div class="container" id="nav">
    {{ $titulares->links('pagination::bootstrap-5') }} 
</div>
@endsection
