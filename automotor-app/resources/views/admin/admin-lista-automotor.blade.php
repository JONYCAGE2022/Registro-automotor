<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Automotores') }}
        </h2>
    </x-slot>

    {{--     <div class="container">
        <!-- Verificar si existe el mensaje de éxito en la sesión -->
        @if (session('success'))
        <!-- Mostrar el mensaje de éxito en un elemento div con una clase de Bootstrap -->
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        <!-- Borrar el mensaje de éxito de la sesión -->
        {{ session()->forget('success') }}
        @endif --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="font-semibold text-lg text-gray-800 leading-tight">
                        {{ __('Lista automotor') }}</h1>
                    <div class="container mx-auto">
                        <table class="table-auto border border-gray-300 shadow-lg">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="border border-gray-300 px-4 py-2 text-left">Nombre y apellido del
                                        titular</th>
                                    <th class="border border-gray-300 px-4 py-2 text-left">Patente</th>
                                    <th class="border border-gray-300 px-4 py-2 text-left">Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($autos as $auto)
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2">{{ $auto->nombre_titular }}
                                        </td>
                                        <td class="border border-gray-300 px-4 py-2">{{ $auto->patente }}</td>
                                        <td class="border border-gray-300 px-4 py-2">
                                            <button type="button"
                                                class="bg-blue-500 hover:bg-blue-600 focus:bg-blue-400 active:bg-blue-700 text-white font-bold py-1 px-2 m-1 rounded"
                                                onclick="window.location.href= '{{ route('DetalleAdminAutomotor', $auto->id) }}'">Ver
                                            </button>
                                            <button type="button"
                                                class="bg-yellow-500 hover:bg-yellow-600 focus:bg-yellow-400 active:bg-yellow-700 text-white font-bold py-1 px-2 m-1 rounded"
                                                onclick="window.location.href= '{{ route('EditarAutomotor', $auto) }}'">Editar
                                            </button>
                                            <button type="submit" class="bg-green-500 hover:bg-green-600 focus:bg-green-400 active:bg-green-700 text-white font-bold py-1 px-2 m-1 rounded" onclick="window.location.href= '{{ route('NuevoAutomotor') }}'">
                                                Nuevo registro
                                            </button>
                                            <form action="{{ route('EliminarAutomotor', $auto->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="bg-red-500 hover:bg-red-600 focus:bg-red-400 active:bg-red-700 text-white font-bold py-1 px-2 m-1 rounded">Eliminar
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    {{-- <button type="submit" class="bg-green-500 hover:bg-green-600 focus:bg-green-400 active:bg-green-700 text-white font-bold py-1 px-2 m-1 rounded" onclick="window.location.href= '{{ route('NuevoAutomotor') }}'">
                                        Nuevo registro
                                    </button> --}}
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- Navigator --}}
            <div class="container mx-auto">
                {{ $autos->links('pagination::simple-tailwind') }}
            </div>
        </div>
    </div>

</x-app-layout>
