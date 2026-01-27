@extends('layouts.app')

@section('title', __('messages.cookies.title'))

@section('content')
<!-- Page Header -->
<section class="bg-primary text-white py-5">
    <div class="container text-center">
        <h1 class="display-4 mb-3">{{ __('messages.cookies.title') }}</h1>
        <p class="lead">{{ __('messages.cookies.subtitle') }}</p>
    </div>
</section>

<!-- Cookie Policy Content -->
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="cookie-content">
                    <p class="lead mb-5">{{ __('messages.cookies.intro') }}</p>

                    <!-- 1. Cosa sono i Cookie -->
                    <div class="mb-5">
                        <h2 class="h4 mb-3">{{ __('messages.cookies.what_are_title') }}</h2>
                        <p>{{ __('messages.cookies.what_are_content') }}</p>
                    </div>

                    <!-- 2. Tipologie di Cookie Utilizzati -->
                    <div class="mb-5">
                        <h2 class="h4 mb-3">{{ __('messages.cookies.types_title') }}</h2>
                        <p>{{ __('messages.cookies.types_intro') }}</p>

                        <!-- Cookie Tecnici -->
                        <div class="bg-light p-4 rounded mb-3">
                            <h3 class="h5 mb-3"><i class="bi bi-gear-fill text-primary me-2"></i>{{ __('messages.cookies.technical_title') }}</h3>
                            <p>{{ __('messages.cookies.technical_content') }}</p>
                            <ul class="mb-0">
                                <li><strong>{{ __('messages.cookies.technical_purpose') }}</strong></li>
                                <li><strong>{{ __('messages.cookies.technical_duration') }}</strong></li>
                                <li><strong>{{ __('messages.cookies.technical_consent') }}</strong></li>
                            </ul>
                        </div>
                    </div>

                    <!-- 3. Risorse di Terze Parti -->
                    <div class="mb-5">
                        <h2 class="h4 mb-3">{{ __('messages.cookies.third_party_title') }}</h2>
                        <p>{{ __('messages.cookies.third_party_intro') }}</p>

                        <!-- Google Fonts -->
                        <div class="border-start border-primary border-4 ps-3 mb-3">
                            <h3 class="h5 mb-3">{{ __('messages.cookies.google_fonts_title') }}</h3>
                            <p>{{ __('messages.cookies.google_fonts_content') }}</p>
                            <ul class="mb-2">
                                <li>{{ __('messages.cookies.google_fonts_provider') }}</li>
                                <li>{{ __('messages.cookies.google_fonts_purpose') }}</li>
                                <li>{!! __('messages.cookies.google_fonts_privacy') !!}</li>
                            </ul>
                            <div class="alert alert-info mb-0">
                                <small><i class="bi bi-info-circle me-2"></i>{{ __('messages.cookies.google_fonts_note') }}</small>
                            </div>
                        </div>
                    </div>

                    <!-- 4. Cookie di Profilazione -->
                    <div class="mb-5">
                        <h2 class="h4 mb-3">{{ __('messages.cookies.no_profiling_title') }}</h2>
                        <div class="alert alert-success">
                            <i class="bi bi-check-circle-fill me-2"></i>
                            {!! __('messages.cookies.no_profiling_content') !!}
                        </div>
                    </div>

                    <!-- 5. Cookie Analitici -->
                    <div class="mb-5">
                        <h2 class="h4 mb-3">{{ __('messages.cookies.no_analytics_title') }}</h2>
                        <div class="alert alert-success">
                            <i class="bi bi-check-circle-fill me-2"></i>
                            {!! __('messages.cookies.no_analytics_content') !!}
                        </div>
                    </div>

                    <!-- 6. Gestione dei Cookie -->
                    <div class="mb-5">
                        <h2 class="h4 mb-3">{{ __('messages.cookies.management_title') }}</h2>
                        <p>{{ __('messages.cookies.management_content') }}</p>

                        <h3 class="h5 mb-3 mt-4">{{ __('messages.cookies.disable_title') }}</h3>
                        <p>{{ __('messages.cookies.disable_intro') }}</p>
                        <ul class="list-unstyled">
                            @foreach(__('messages.cookies.disable_list') as $item)
                            <li class="mb-2"><i class="bi bi-arrow-right-circle text-primary me-2"></i>{!! $item !!}</li>
                            @endforeach
                        </ul>

                        <div class="alert alert-warning mt-3">
                            <strong><i class="bi bi-exclamation-triangle-fill me-2"></i>{{ __('messages.cookies.disable_warning_title') }}</strong><br>
                            {{ __('messages.cookies.disable_warning_content') }}
                        </div>
                    </div>

                    <!-- 7. Consenso all'Utilizzo dei Cookie -->
                    <div class="mb-5">
                        <h2 class="h4 mb-3">{{ __('messages.cookies.consent_title') }}</h2>
                        <p>{{ __('messages.cookies.consent_content') }}</p>
                    </div>

                    <!-- 8. Titolare del Trattamento -->
                    <div class="mb-5">
                        <h2 class="h4 mb-3">{{ __('messages.cookies.data_controller_title') }}</h2>
                        <p>{{ __('messages.cookies.data_controller_content') }}</p>
                        <div class="bg-light p-4 rounded">
                            <p class="mb-2"><strong>{{ __('messages.cookies.data_controller_name') }}</strong></p>
                            <p class="mb-1">{{ __('messages.cookies.data_controller_address') }}</p>
                            <p class="mb-0">{{ __('messages.cookies.data_controller_email') }}</p>
                        </div>
                    </div>

                    <!-- 9. Aggiornamenti -->
                    <div class="mb-5">
                        <h2 class="h4 mb-3">{{ __('messages.cookies.updates_title') }}</h2>
                        <p>{{ __('messages.cookies.updates_content') }}</p>
                    </div>

                    <!-- 10. Maggiori Informazioni -->
                    <div class="mb-5">
                        <h2 class="h4 mb-3">{{ __('messages.cookies.more_info_title') }}</h2>
                        <p>{!! str_replace('{privacy_url}', route('privacy-policy', app()->getLocale()), __('messages.cookies.more_info_content')) !!}</p>
                        <p class="mt-3">{{ __('messages.cookies.more_info_links') }}</p>
                        <ul class="list-unstyled">
                            @foreach(__('messages.cookies.more_info_list') as $item)
                            <li class="mb-2"><i class="bi bi-link-45deg text-primary me-2"></i>{!! $item !!}</li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Last Update -->
                    <div class="border-top pt-4 mt-5">
                        <p class="text-muted text-center mb-0"><em>{{ __('messages.cookies.last_update') }}</em></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
