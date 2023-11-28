<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Infracción') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="font-semibold text-lg text-gray-800 leading-tight">
                        {{ __('Nueva Infracción') }}
                    </h1>
                    <div class="container mx-autos">
                        <form action="{{ route('GuardarNuevaInfraccion') }}" method="POST">
                            @csrf
                            @method('POST')
                            <table class="table-auto table-striped bordr border-gray-300 shadow-lg">
                                <tr>
                                    <th class="border bg-gray-100 border-gray-300 px-4 py2 text-left">
                                        Auto: tipo/patente
                                    </th>
                                    <td class="border border-gray-300 px-4 py-2">
                                        <select
                                            class="rounded-lg border border-gray-300 px-9 py-2 focus:outline-none focus:ring-indigo-500 placeholder-gray-400"
                                            name="auto_id">
                                            @foreach ($datosAuto as $auto)
                                                <option value="{{ $auto->id }}"> 
                                                    {{ $auto->datos_auto }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="border bg-gray-100 border-gray-300 px-4 py2 text-left">
                                        Fecha
                                    </th>
                                    <td class="border border-gray-300 px-4 py-2">
                                        <input
                                            class="rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-indigo-500 placeholder-gray-400"
                                            type="date" name="fecha">
                                    </td>
                                </tr>
                                <tr>
                                    <th class="border bg-gray-100 border-gray-300 px-4 py2 text-left">
                                        Descripción
                                    </th>
                                    <td class="border border-gray-300 px-4 py-2">
                                        <input
                                            class="rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-indigo-500 placeholder-gray-400"
                                            type="text" name="descripcion">
                                    </td>
                                </tr>
                                <tr>
                                    <th class="border bg-gray-100 border-gray-300 px-4 py2 text-left">
                                        Tipo
                                    </th>
                                    <td class="border border-gray-300 px-4 py-2">
                                        <select
                                            class="rounded-lg border border-gray-300 px-9 py-2 focus:outline-none focus:ring-indigo-500 placeholder-gray-400"
                                            name="tipo">
                                            @foreach ($tipoInfraccion as $infraccion)
                                                <option value="{{ $infraccion->tipo }}"> 
                                                    {{ $infraccion->tipo }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                            </table>
                            <div class="py-3">
                                <button
                                    class="bg-blue-500 hover:bg-blue-600 focus:bg-blue-400 active:bg-blue-700 text-white font-bold py-1 px-2 m-1 rounded">
                                    Guardar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <button
                class="bg-gray-500 hover:bg-gray-600 focus:bg-gray-400 active:bg-gray-700 text-white font-bold py-1 px-2 m-1 rounded"
                onclick="window.location.href= '{{ route('ListaAdminInfraccion') }}'" type="submit">
                Volver
            </button>
        </div>
    </div>

</x-app-layout>

