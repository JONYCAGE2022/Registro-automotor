<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Automotor') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __('Editar automotor') }}
                    <div class="container mx-auto">
                        <div class="mx-auto">
                            <table class="table-auto table-striped border border-gray-300 shadow-lg">
                                <tr>
                                    <th class="border bg-gray-100 border-gray-300 px-4 py-2 text-left">
                                        Nombre y apellido del titular
                                    </th>
                                    <td class="border border-gray-300 px-4 py-2">
                                        {{ $detalleAuto ? $detalleAuto->nombre_titular : '' }}
                                    </td>
                                </tr>
                                <form action="{{ route('ActualizarAutomotor', $detalleAuto->id) }}" method="POST">
                                    <tr>
                                        <th class="border bg-gray-100 border-gray-300 px-4 py-2 text-left">
                                            Patente
                                        </th>
                                        <td class="border border-gray-300 px-4 py-2">
                                            <input
                                                class="rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-indigo-500 placeholder-gray-400"
                                                name="patente" type="text"
                                                value="{{ $detalleAuto ? $detalleAuto->patente : '' }}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="border bg-gray-100 border-gray-300 px-4 py-2 text-left">
                                            Marca
                                        </th>
                                        <td class="border border-gray-300 px-4 py-2">
                                            <input
                                                class="rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-indigo-500 placeholder-gray-400"
                                                name="marca" type="text" value="{{ $detalleAuto ? $detalleAuto->marca : '' }}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="border bg-gray-100 border-gray-300 px-4 py-2 text-left">
                                            Modelo
                                        </th>
                                        <td class="border border-gray-300 px-4 py-2">
                                            <input
                                                class="rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-indigo-500 placeholder-gray-400"
                                                name="modelo" type="text" value="{{ $detalleAuto ? $detalleAuto->modelo : '' }}">
                                        </td>
                                    </tr>
                                    @csrf
                                    @method('PUT')
                                    <button
                                        class="bg-blue-500 hover:bg-blue-600 focus:bg-blue-400 active:bg-blue-700 text-white font-bold py-1 px-2 m-1 rounded"
                                        type="submit">
                                        Guardar
                                    </button>
                                </form>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <button
                class="bg-gray-500 hover:bg-gray-600 focus:bg-gray-400 active:bg-gray-700 text-white font-bold py-1 px-2 m-1 rounded"
                onclick="window.location.href= '{{ route('ListaAdminAutomotor') }}'" type="submit">
                Volver
            </button>
        </div>
    </div>

</x-app-layout>
