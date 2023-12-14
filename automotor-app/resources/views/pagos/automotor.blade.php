@extends('layouts.plantilla')
@section('titulo', 'Detalle automotor')
@section('contenido')


    @php
        // SDK de Mercado Pago
        use MercadoPago\MercadoPagoConfig;
        use MercadoPago\Client\Payment\PaymentClient;
        use MercadoPago\Exceptions\MPApiException;
        use MercadoPago\Client\Preference\PreferenceClient;
        // Agrega credenciales
        MercadoPagoConfig::setAccessToken(config('services.mercadopago.token'));
        //Preferencias
        $client = new PreferenceClient();
        $preference = $client->create([
            'items' => [
                [
                    'id' => '0001',
                    'title' => 'Registrar patente',
                    'description' => 'Pago para registrar la patente',
                    'picture_url' => 'https://www.mercadopago.com/org-img/MP3/home/logomp3.gif',
                    'quantity' => 1,
                    'currency_id' => 'ARG',
                    'unit_price' => 100,
                ],
            ],
            // URLs de retorno
            'back_urls' => [
                    'success' => route('ListaAutomotor'),
                    'failure' => route('RegistrarAutomotor'),
                    'pending' => route('ListaAutomotor'),
            ],
        ]);
    @endphp

    <h1>Registrar automotor</h1>

    <div class="container d-flex justify-content-center">
        <div class="mx-auto">
            <table class="table table-striped">
                <tr>
                    <th>Nombre y apellido del titular</th>
                    <td>
                        <input type="text" class="form-control">
                    </td>
                </tr>
                <tr>
                    <th>Patente</th>
                    <td>
                        <input type="text" class="form-control">
                    </td>
                </tr>
                <tr>
                    <th>Marca</th>
                    <td>
                        <input type="text" class="form-control">
                    </td>
                </tr>
                <tr>
                    <th>Modelo</th>
                    <td>
                        <input type="text" class="form-control">
                    </td>
                </tr>
                <tr>
                    <th>Tipo</th>
                    <td>
                        <input type="text" class="form-control">
                    </td>
                </tr>
                <tr>
                    <th>Precio</th>
                    <td>
                        <label class="form-label">$100</label>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="container d-flex justify-content-center">
        <div class="row">
            <div class="col">
                <button class="btn btn-secondary centrar" onclick="window.location.href= '{{ route('Home') }}'"
                    type="submit">
                    Volver
                </button>
            </div>
            <div class="col" id="wallet_container">

            </div>
        </div>
    </div>
    {{-- SDK de mercadopago --}}
    <script src="https://sdk.mercadopago.com/js/v2"></script>

    <script>
        //Inicia la intregración
        const mp = new MercadoPago("{{ config('services.mercadopago.key') }}", {
            locale: 'es-AR'
        });

        const bricksBuilder = mp.bricks();
        //Inicia el checkout
        mp.bricks().create("wallet", "wallet_container", {
            initialization: {
                preferenceId: '{{ $preference->id }}',
                redirectMode: "modal"
            },
            customization: {
                visual: {
                    buttonBackground: 'black',
                    borderRadius: '16px',
                },
            },
        });
    </script>
@endsection
