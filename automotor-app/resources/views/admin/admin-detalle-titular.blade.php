<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Titular') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __('Detalle de titular') }}
                    <div class="container mx-auto">
                        <div class="mx-auto">
                            <table class="table-auto table-striped border border-gray-300 shadow-lg">
                                <tr>
                                    <th class="border bg-gray-100 border-gray-300 px-4 py-2 text-left">Nombre y apellido
                                        del titular</th>
                                    <td class="border border-gray-300 px-4 py-2">{{ $detalleTitular->nombre_titular }}
                                    </td>
                                </tr>
                                <tr>
                                    <th class="border bg-gray-100 border-gray-300 px-4 py-2 text-left">DNI</th>
                                    <td class="border border-gray-300 px-4 py-2">{{ $detalleTitular->dni }}</td>
                                </tr>
                                <tr>
                                    <th class="border bg-gray-100 border-gray-300 px-4 py-2 text-left">Domicilio</th>
                                    <td class="border border-gray-300 px-4 py-2">{{ $detalleTitular->domicilio }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <button
                class="bg-gray-500 hover:bg-gray-600 focus:bg-gray-400 active:bg-gray-700 text-white font-bold py-1 px-2 m-1 rounded"
                onclick="window.location.href= '{{ route('ListaAdminTitular') }}'" type="submit">Volver</button>
        </div>
    </div>

</x-app-layout>
