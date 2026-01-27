@extends('layouts.app')

@section('title', __('messages.privacy.title'))

@section('content')
<!-- Page Header -->
<section class="bg-primary text-white py-5">
    <div class="container text-center">
        <h1 class="display-4 mb-3">{{ __('messages.privacy.title') }}</h1>
        <p class="lead">{{ __('messages.privacy.subtitle') }}</p>
    </div>
</section>

<!-- Privacy Policy Content -->
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="privacy-content">
                    <p class="lead mb-5">{{ __('messages.privacy.intro') }}</p>

                    <!-- 1. Titolare del Trattamento -->
                    <div class="mb-5">
                        <h2 class="h4 mb-3">{{ __('messages.privacy.controller_title') }}</h2>
                        <p>{{ __('messages.privacy.controller_content') }}</p>
                        <div class="bg-light p-4 rounded">
                            <p class="mb-2"><strong>{{ __('messages.privacy.controller_name') }}</strong></p>
                            <p class="mb-1">{{ __('messages.privacy.controller_address') }}</p>
                            <p class="mb-1">{{ __('messages.privacy.controller_vat') }}</p>
                            <p class="mb-1">{{ __('messages.privacy.controller_cf') }}</p>
                            <p class="mb-1">{{ __('messages.privacy.controller_email') }}</p>
                            <p class="mb-0">{{ __('messages.privacy.controller_phone') }}</p>
                        </div>
                    </div>

                    <!-- 2. Tipologie di Dati Raccolti -->
                    <div class="mb-5">
                        <h2 class="h4 mb-3">{{ __('messages.privacy.data_types_title') }}</h2>
                        <p>{{ __('messages.privacy.data_types_content') }}</p>
                        <ul class="list-unstyled">
                            @foreach(__('messages.privacy.data_types_list') as $item)
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> {!! $item !!}</li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- 3. Finalità del Trattamento -->
                    <div class="mb-5">
                        <h2 class="h4 mb-3">{{ __('messages.privacy.purpose_title') }}</h2>
                        <p>{{ __('messages.privacy.purpose_content') }}</p>
                        <ul>
                            @foreach(__('messages.privacy.purpose_list') as $item)
                            <li class="mb-2">{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- 4. Base Giuridica del Trattamento -->
                    <div class="mb-5">
                        <h2 class="h4 mb-3">{{ __('messages.privacy.legal_basis_title') }}</h2>
                        <p>{{ __('messages.privacy.legal_basis_content') }}</p>
                        <ul class="list-unstyled">
                            @foreach(__('messages.privacy.legal_basis_list') as $item)
                            <li class="mb-2"><i class="bi bi-shield-check text-primary me-2"></i> {!! $item !!}</li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- 5. Periodo di Conservazione -->
                    <div class="mb-5">
                        <h2 class="h4 mb-3">{{ __('messages.privacy.retention_title') }}</h2>
                        <p>{{ __('messages.privacy.retention_content') }}</p>
                        <ul>
                            @foreach(__('messages.privacy.retention_list') as $item)
                            <li class="mb-2">{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- 6. Diritti dell'Interessato -->
                    <div class="mb-5">
                        <h2 class="h4 mb-3">{{ __('messages.privacy.rights_title') }}</h2>
                        <p>{{ __('messages.privacy.rights_content') }}</p>
                        <ul>
                            @foreach(__('messages.privacy.rights_list') as $item)
                            <li class="mb-2">{{ $item }}</li>
                            @endforeach
                        </ul>
                        <div class="alert alert-info mt-3" role="alert">
                            <i class="bi bi-info-circle-fill me-2"></i>
                            {{ __('messages.privacy.rights_exercise') }}
                        </div>
                    </div>

                    <!-- 7. Comunicazione e Diffusione dei Dati -->
                    <div class="mb-5">
                        <h2 class="h4 mb-3">{{ __('messages.privacy.sharing_title') }}</h2>
                        <p>{{ __('messages.privacy.sharing_content') }}</p>
                        <ul>
                            @foreach(__('messages.privacy.sharing_list') as $item)
                            <li class="mb-2">{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- 8. Sicurezza dei Dati -->
                    <div class="mb-5">
                        <h2 class="h4 mb-3">{{ __('messages.privacy.security_title') }}</h2>
                        <p>{{ __('messages.privacy.security_content') }}</p>
                    </div>

                    <!-- 9. Cookie e Tecnologie Simili -->
                    <div class="mb-5">
                        <h2 class="h4 mb-3">{{ __('messages.privacy.cookies_title') }}</h2>
                        <p>{{ __('messages.privacy.cookies_content') }}</p>
                        <ul class="list-unstyled">
                            @foreach(__('messages.privacy.cookies_list') as $item)
                            <li class="mb-2"><i class="bi bi-cookie text-primary me-2"></i> {!! $item !!}</li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- 10. Modifiche all'Informativa -->
                    <div class="mb-5">
                        <h2 class="h4 mb-3">{{ __('messages.privacy.changes_title') }}</h2>
                        <p>{{ __('messages.privacy.changes_content') }}</p>
                    </div>

                    <!-- Last Update -->
                    <div class="border-top pt-4 mt-5">
                        <p class="text-muted text-center mb-0"><em>{{ __('messages.privacy.last_update') }}</em></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
