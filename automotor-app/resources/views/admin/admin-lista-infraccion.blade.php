<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Infracciones') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="font-semibold text-lg text-gray-800 leading-tight">
                        {{ __('Lista infracción') }}</h1>
                        <div class="container mx-auto">
                            <table class="table-auto border border-gray-300 shadow-lg">
                                <thead>
                                    <tr class="bg-gray-100">
                                        <th class="border border-gray-300 px-4 py-2 text-left">Auto: tipo/patente</th>
                                        <th class="border border-gray-300 px-4 py-2 text-left">Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($infracciones as $infraccion)
                                        <tr>
                                            <td class="border border-gray-300 px-4 py-2">
                                                {{ $infraccion->tipo_patente_autos }}</td>
                                            <td class="border border-gray-300 px-4 py-2"> 
                                                <button type="button"
                                                    class="bg-blue-500 hover:bg-blue-600 focus:bg-blue-400 active:bg-blue-700 text-white font-bold py-1 px-2 m-1 rounded"
                                                    onclick="window.location.href= '{{ route('DetalleAdminInfraccion', $infraccion->id) }}'"
                                                    type="submit">Ver
                                                </button>
                                                <button type="button"
                                                    class="bg-yellow-500 hover:bg-yelow-600 focus:bg-yellow-400 active:bg-yellow-700 text-white font-bold py-1 px-2 m-1 rounded"
                                                    onclick="window.location.href= '{{ route('DetalleAdminInfraccion', $infraccion->id) }}'"
                                                    type="submit">Editar
                                                </button> 
                                                <button type="button"
                                                    class="bg-red-500 hover:bg-red-600 focus:bg-red-400 active:bg-red-700 text-white font-bold py-1 px-2 m-1 rounded"
                                                    onclick="window.location.href= '{{ route('DetalleAdminInfraccion', $infraccion->id) }}'"
                                                    type="submit">Eliminar
                                                </button>  
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
            {{-- Navigator --}}
            <div class="container mx-auto">
                {{ $infracciones->links('pagination::simple-tailwind') }}
            </div>
        </div>
    </div>

</x-app-layout>
