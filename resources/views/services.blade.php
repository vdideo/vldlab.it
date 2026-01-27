@extends('layouts.app')

@section('title', __('messages.menu.services'))

@section('content')
    {{-- Hero Section --}}
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-auto mb-4 mb-md-0">
                    <img src="{{ asset('assets/img/vincenzo_di_deo.jpg') }}" alt="Vincenzo Di Deo" class="hero-photo">
                </div>
                <div class="col-md-auto text-center text-md-start">
                    <h1>{{ __('messages.services.title') }}</h1>
                    <p class="lead mb-0">{{ __('messages.services.subtitle') }}</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Services Section --}}
    <section class="py-5">
        <div class="container">

            {{-- E-commerce --}}
            <div class="row align-items-center mb-5 pb-5 border-bottom">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="service-icon-large">
                        <i class="bi bi-cart4"></i>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="h3 fw-bold mb-3">{{ __('messages.services.ecommerce_title') }}</h2>
                    <p class="text-muted mb-4">{{ __('messages.services.ecommerce_description') }}</p>
                    <ul class="service-list">
                        <li><i class="bi bi-check-circle-fill text-brand-gold"></i> {{ __('messages.services.ecommerce_item_1') }}</li>
                        <li><i class="bi bi-check-circle-fill text-brand-gold"></i> {{ __('messages.services.ecommerce_item_2') }}</li>
                        <li><i class="bi bi-check-circle-fill text-brand-gold"></i> {{ __('messages.services.ecommerce_item_3') }}</li>
                        <li><i class="bi bi-check-circle-fill text-brand-gold"></i> {{ __('messages.services.ecommerce_item_4') }}</li>
                    </ul>
                </div>
            </div>

            {{-- Websites --}}
            <div class="row align-items-center mb-5 pb-5 border-bottom flex-lg-row-reverse">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="service-icon-large">
                        <i class="bi bi-globe2"></i>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="h3 fw-bold mb-3">{{ __('messages.services.websites_title') }}</h2>
                    <p class="text-muted mb-4">{{ __('messages.services.websites_description') }}</p>
                    <ul class="service-list">
                        <li><i class="bi bi-check-circle-fill text-brand-gold"></i> {{ __('messages.services.websites_item_1') }}</li>
                        <li><i class="bi bi-check-circle-fill text-brand-gold"></i> {{ __('messages.services.websites_item_2') }}</li>
                        <li><i class="bi bi-check-circle-fill text-brand-gold"></i> {{ __('messages.services.websites_item_3') }}</li>
                        <li><i class="bi bi-check-circle-fill text-brand-gold"></i> {{ __('messages.services.websites_item_4') }}</li>
                    </ul>
                </div>
            </div>

            {{-- Software Development --}}
            <div class="row align-items-center mb-5 pb-5 border-bottom">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="service-icon-large">
                        <i class="bi bi-code-slash"></i>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="h3 fw-bold mb-3">{{ __('messages.services.software_title') }}</h2>
                    <p class="text-muted mb-4">{{ __('messages.services.software_description') }}</p>
                    <ul class="service-list">
                        <li><i class="bi bi-check-circle-fill text-brand-gold"></i> {{ __('messages.services.software_item_1') }}</li>
                        <li><i class="bi bi-check-circle-fill text-brand-gold"></i> {{ __('messages.services.software_item_2') }}</li>
                        <li><i class="bi bi-check-circle-fill text-brand-gold"></i> {{ __('messages.services.software_item_3') }}</li>
                        <li><i class="bi bi-check-circle-fill text-brand-gold"></i> {{ __('messages.services.software_item_4') }}</li>
                    </ul>
                </div>
            </div>

            {{-- System Integration --}}
            <div class="row align-items-center mb-5">
                <div class="col-lg-6 mb-4 mb-lg-0 order-lg-2">
                    <div class="service-icon-large">
                        <i class="bi bi-diagram-3"></i>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <h2 class="h3 fw-bold mb-3">{{ __('messages.services.integration_title') }}</h2>
                    <p class="text-muted mb-4">{{ __('messages.services.integration_description') }}</p>
                    <ul class="service-list">
                        <li><i class="bi bi-check-circle-fill text-brand-gold"></i> {{ __('messages.services.integration_item_1') }}</li>
                        <li><i class="bi bi-check-circle-fill text-brand-gold"></i> {{ __('messages.services.integration_item_2') }}</li>
                        <li><i class="bi bi-check-circle-fill text-brand-gold"></i> {{ __('messages.services.integration_item_3') }}</li>
                        <li><i class="bi bi-check-circle-fill text-brand-gold"></i> {{ __('messages.services.integration_item_4') }}</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>

    {{-- CTA Section --}}
    <section class="cta-section py-5">
        <div class="container text-center">
            <h2 class="h3 fw-bold text-white mb-3">{{ __('messages.services.cta_title') }}</h2>
            <p class="text-white-50 mb-4">{{ __('messages.services.cta_subtitle') }}</p>
            <a href="{{ route('contacts', app()->getLocale()) }}" class="btn btn-cta btn-lg px-5">
                {{ __('messages.services.cta_button') }}
            </a>
        </div>
    </section>

    {{-- Tech Stack Section --}}
    <section class="tech-stack-section py-5">
        <div class="container">
            <p class="text-center text-muted mb-4">{{ __('messages.services.tech_stack_title') }}</p>
            <div class="tech-logos">
                <div class="tech-logo">
                    <img src="{{ asset('assets/img/stack/php_logo.svg') }}" alt="PHP">
                </div>
                <div class="tech-logo">
                    <img src="{{ asset('assets/img/stack/laravel.svg') }}" alt="Laravel">
                </div>
                <div class="tech-logo">
                    <img src="{{ asset('assets/img/stack/magento.svg') }}" alt="Magento">
                </div>
                <div class="tech-logo">
                    <img src="{{ asset('assets/img/stack/prestashop.svg') }}" alt="PrestaShop">
                </div>
                <div class="tech-logo">
                    <img src="{{ asset('assets/img/stack/mysql.svg') }}" alt="MySQL">
                </div>
                <div class="tech-logo">
                    <img src="{{ asset('assets/img/stack/docker.svg') }}" alt="Docker">
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
<style>
    .hero-photo {
        width: 140px;
        height: 140px;
        border-radius: 50%;
        object-fit: cover;
        border: 4px solid rgba(255, 255, 255, 0.3);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    }

    @media (min-width: 768px) {
        .hero-photo {
            width: 200px;
            height: 200px;
            margin-right: 2.5rem;
        }
    }

    .service-icon-large {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 180px;
        height: 180px;
        margin: 0 auto;
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        border-radius: 50%;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .service-icon-large i {
        font-size: 5rem;
        color: var(--brand-gold);
    }

    .service-icon-large:hover {
        transform: scale(1.05);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    }

    .service-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .service-list li {
        display: flex;
        align-items: center;
        padding: 0.5rem 0;
        font-size: 1rem;
    }

    .service-list li i {
        margin-right: 0.75rem;
        font-size: 1.1rem;
    }

    .cta-section {
        background: linear-gradient(135deg, var(--brand-dark) 0%, var(--brand-dark-deep) 100%);
    }

    .cta-section h2 {
        color: var(--brand-gold);
    }

    .btn-cta {
        background-color: var(--brand-gold);
        color: var(--brand-dark);
        font-weight: 600;
        border: none;
        transition: all 0.3s ease;
    }

    .btn-cta:hover {
        background-color: var(--brand-gold-light);
        color: var(--brand-dark);
        transform: translateY(-2px);
        box-shadow: 0 5px 20px rgba(194, 146, 37, 0.4);
    }

    /* Tech Stack */
    .tech-stack-section {
        background-color: #f8f9fa;
    }

    .tech-logos {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        gap: 2rem 3rem;
    }

    .tech-logo {
        flex: 0 0 auto;
    }

    .tech-logo img {
        height: 45px;
        width: auto;
        filter: grayscale(100%);
        opacity: 0.6;
        transition: all 0.3s ease;
    }

    .tech-logo img:hover {
        filter: grayscale(0%);
        opacity: 1;
    }

    @media (max-width: 576px) {
        .tech-logos {
            gap: 1.5rem 2rem;
        }

        .tech-logo img {
            height: 35px;
        }
    }

    @media (max-width: 991px) {
        .service-icon-large {
            width: 140px;
            height: 140px;
        }

        .service-icon-large i {
            font-size: 4rem;
        }
    }

    @media (max-width: 576px) {
        .service-icon-large {
            width: 120px;
            height: 120px;
        }

        .service-icon-large i {
            font-size: 3rem;
        }
    }
</style>
@endpush
