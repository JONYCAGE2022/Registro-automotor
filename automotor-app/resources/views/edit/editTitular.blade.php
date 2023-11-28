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
                    <h1 class="font-semibold text-lg text-gray-800 leading-tight">
                        {{ __('Editar titular') }}
                    </h1>
                    <div class="container mx-auto">
                        <div class="mx-auto">
                            <form action="{{ route('ActualizarTitular', $detalleTitular->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <table class="table-auto table-striped border border-gray-300 shadow-lg">
                                    <tr>
                                        <th class="border bg-gray-100 border-gray-300 px-4 py-2 text-left">
                                            Nombre del titular
                                        </th>
                                        <td class="border border-gray-300 px-4 py-2">
                                            <input
                                                class="rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-indigo-500 placeholder-gray-400"
                                                name="nombre" type="text"
                                                value="{{ $detalleTitular ? $detalleTitular->nombre : '' }}">
                                        </td>
                                    </tr>

                                    <tr>
                                        <th class="border bg-gray-100 border-gray-300 px-4 py-2 text-left">
                                            Apellido del titular
                                        </th>
                                        <td class="border border-gray-300 px-4 py-2">
                                            <input
                                                class="rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-indigo-500 placeholder-gray-400"
                                                name="apellido" type="text"
                                                value="{{ $detalleTitular ? $detalleTitular->apellido : '' }}">
                                        </td>
                                    </tr>

                                    <tr>
                                        <th class="border bg-gray-100 border-gray-300 px-4 py-2 text-left">
                                            DNI
                                        </th>
                                        <td class="border border-gray-300 px-4 py-2">
                                            <input
                                                class="rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-indigo-500 placeholder-gray-400"
                                                name="dni" type="text"
                                                value="{{ $detalleTitular ? $detalleTitular->dni : '' }}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="border bg-gray-100 border-gray-300 px-4 py-2 text-left">
                                            Domicilio
                                        </th>
                                        <td class="border border-gray-300 px-4 py-2">
                                            <input
                                                class="rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-indigo-500 placeholder-gray-400"
                                                name="domicilio" type="text"
                                                value="{{ $detalleTitular ? $detalleTitular->domicilio : '' }}">
                                        </td>
                                    </tr>
                                </table>
                                <div class="py-3">
                                    <button
                                        class="bg-blue-500 hover:bg-blue-600 focus:bg-blue-400 active:bg-blue-700 text-white font-bold py-1 px-2 m-1 rounded"
                                        type="submit">
                                        Guardar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <button
                class="bg-gray-500 hover:bg-gray-600 focus:bg-gray-400 active:bg-gray-700 text-white font-bold py-1 px-2 m-1 rounded"
                onclick="window.location.href= '{{ route('ListaAdminTitular') }}'" type="submit">
                Volver
            </button>
        </div>
    </div>

</x-app-layout>
