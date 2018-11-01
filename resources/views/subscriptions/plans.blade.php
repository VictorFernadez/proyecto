@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pricing.css') }}">
@endpush

@section('jumbotron')
    @include('partials.jumbotron', [
        'title' => __("Subscríbete ahora a uno de nuestros planes"),
        'icon' => 'globe'
    ])
@endsection

@section('content')
    <div class="container">
        <div class="pricing-table pricing-three-column row">
            <div class="plan col-sm-4 col-lg-4">
                <div class="plan-name-bronze">
                    <h2>{{ __("MENSUAL") }}</h2>
                    <span>{{ __(":price / Mes", ['price' => 'S/ 29.90']) }}</span>
                </div>
                <ul>
                    <li class="plan-feature">{{ __("Acceso a todos los cursos") }}</li>
                    <li class="plan-feature">{{ __("Acceso a todos los archivos") }}</li>
                    <li class="plan-feature">
                        @include('partials.stripe.form', [
                            "product" => [
                                "name" => __("Suscripción"),
                                "description" => __("Mensual"),
                                "type" => "monthly",
                                "amount" => 2990,99
                            ]
                        ])
                    </li>
                </ul>
            </div>

            <div class="plan col-sm-4 col-lg-4">
                <div class="plan-name-silver">
                    <h2>{{ __("Trimestral") }}</h2>
                    <span>{{ __(":price / 3 meses", ['price' => 'S/ 76.34']) }}</span>
                </div>
                <ul>
                    <li class="plan-feature">{{ __("Acceso a todos los cursos") }}</li>
                    <li class="plan-feature">{{ __("Acceso a todos los archivos") }}</li>
                    <li class="plan-feature">
                        @include('partials.stripe.form',
                            ["product" => [
                                'name' => 'Suscripción',
                                'description' => 'Trimestral',
                                'type' => 'quarterly',
                                'amount' => 7664.99
                            ]]
                        )
                    </li>
                </ul>
            </div>

            <div class="plan col-sm-4 col-lg-4">
                <div class="plan-name-gold">
                    <h2>{{ __("ANUAL") }}</h2>
                    <span>{{ __(":price / 12 meses", ['price' => 'S/ 343.67']) }}</span>
                </div>
                <ul>
                    <li class="plan-feature">{{ __("Acceso a todos los cursos") }}</li>
                    <li class="plan-feature">{{ __("Acceso a todos los archivos") }}</li>
                    <li class="plan-feature">
                        @include('partials.stripe.form',
                            ["product" => [
                                'name' => 'Suscripción',
                                'description' => 'Anual',
                                'type' => 'yearly',
                                'amount' => 34367.99
                            ]]
                        )
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
