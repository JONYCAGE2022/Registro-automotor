<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Infracciones') }}
        </h2>

        <form action="{{ route('BuscarAdminInfraccion') }}" method="GET">
            <div class="flex justify-star">
                <input
                    class="w-60 border-2 border-gray-300 py-2 px-2 rounded-md text-sm focus:outline-none focus:border-blue-500"
                    type="text" placeholder="Buscar por patente" value="{{ request('buscar') }}" name="buscar">
                <button type="submit" class="bg-black hover:bg-black-600 focus:bg-black-400 active:bg-black-700 text-white font-bold py-1 px-2 m-1 rounded" onclick="window.location.href= '{{ route('ListaAdminInfraccion') }}'">
                    Buscar
                </button>
            </div>
        </form>

    </x-slot>

    <script>
        var mensaje = "{{ session('success') }}";
        if (mensaje !==''){
            alert(mensaje);
        }
    </script>

    <div class="py-2 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <button type="submit"
            class="bg-green-500 hover:bg-green-600 focus:bg-green-400 active:bg-green-700 text-white font-bold py-1 px-2 m-1 rounded"
            onclick="window.location.href= '{{ route('FormularioInfraccion') }}'">
            Nuevo registro
        </button>
    </div>

    <div class="py-1">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="font-semibold text-lg text-gray-800 leading-tight">
                        {{ __('Lista infracción') }}
                    </h1>
                    <div class="container mx-auto overflow-x-auto">
                        <table class="table-auto border border-gray-300 shadow-lg">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="border border-gray-300 px-4 py-2 text-left">
                                        Auto: tipo/patente
                                    </th>
                                    <th class="border border-gray-300 px-4 py-2 text-left">
                                        Accion
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($infracciones as $infraccion)
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2">
                                            {{ $infraccion->tipo_patente_autos }}
                                        </td>
                                        <td class="border border-gray-300 px-4 py-2">
                                            <div class="flex">
                                                <button
                                                    class="bg-blue-500 hover:bg-blue-600 focus:bg-blue-400 active:bg-blue-700 text-white font-bold py-1 px-2 m-1 rounded"
                                                    onclick="window.location.href= '{{ route('DetalleAdminInfraccion', $infraccion->id) }}'"
                                                    type="submit">
                                                    Ver
                                                </button>
                                                <form action="{{ route('EliminarInfraccion', $infraccion->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="bg-red-500 hover:bg-red-600 focus:bg-red-400 active:bg-red-700 text-white font-bold py-1 px-2 m-1 rounded">
                                                        Eliminar
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- Navigator --}}
            <div class="flex justify-center">
                {{ $infracciones->links('pagination::simple-tailwind') }}
            </div>
        </div>
    </div>
</x-app-layout>
