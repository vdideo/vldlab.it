@extends('layouts.app')

@section('title', __('messages.menu.contacts'))

@section('content')
    {{-- Hero Section --}}
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-auto mb-4 mb-md-0">
                    <img src="{{ asset('assets/img/contatti_square.jpg') }}" alt="Contatti" class="hero-photo">
                </div>
                <div class="col-md-auto text-center text-md-start">
                    <h1>{{ __('messages.contacts.title') }}</h1>
                    <p class="lead mb-0">{{ __('messages.contacts.subtitle') }}</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Contact Info Section --}}
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row g-4">
                        {{-- Email --}}
                        <div class="col-md-6">
                            <div class="contact-card h-100">
                                <div class="contact-icon">
                                    <i class="bi bi-envelope"></i>
                                </div>
                                <h3>Email</h3>
                                <a href="mailto:info@vldlab.it" class="contact-link">info@vldlab.it</a>
                            </div>
                        </div>

                        {{-- Phone --}}
                        <div class="col-md-6">
                            <div class="contact-card h-100">
                                <div class="contact-icon">
                                    <i class="bi bi-telephone"></i>
                                </div>
                                <h3>{{ __('messages.contacts.phone') }}</h3>
                                <a href="tel:+393492829227" class="contact-link">+39 349 2829227</a>
                            </div>
                        </div>

                        {{-- Hours --}}
                        <div class="col-md-6">
                            <div class="contact-card h-100">
                                <div class="contact-icon">
                                    <i class="bi bi-clock"></i>
                                </div>
                                <h3>{{ __('messages.contacts.hours') }}</h3>
                                <p class="mb-1">{{ __('messages.contacts.hours_days') }}</p>
                                <p class="mb-0">9:30 - 13:00 | 14:00 - 18:30</p>
                            </div>
                        </div>

                        {{-- Address --}}
                        <div class="col-md-6">
                            <div class="contact-card h-100">
                                <div class="contact-icon">
                                    <i class="bi bi-geo-alt"></i>
                                </div>
                                <h3>{{ __('messages.contacts.address') }}</h3>
                                <p class="mb-0">Via Giovanni Calabrò, 13/A<br>66034 Lanciano (CH) - Italy</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Map Section --}}
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h2 class="section-title mb-4">{{ __('messages.contacts.where_we_are') }}</h2>
                    <div class="map-container">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2949.5!2d14.3842115!3d42.219161!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDLCsDEzJzA5LjAiTiAxNMKwMjMnMDMuMiJF!5e0!3m2!1sit!2sit!4v1706000000000!5m2!1sit!2sit"
                            width="100%"
                            height="400"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="cta-section py-5">
        <div class="container text-center">
            <h2 class="h3 fw-bold text-white mb-3">{{ __('messages.contacts.cta_title') }}</h2>
            <p class="text-white-50 mb-4">{{ __('messages.contacts.cta_subtitle') }}</p>
            <a href="mailto:info@vldlab.it" class="btn btn-cta btn-lg px-5">
                <i class="bi bi-envelope me-2"></i>{{ __('messages.contacts.cta_button') }}
            </a>
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

    .contact-card {
        background: white;
        padding: 2rem;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .contact-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
    }

    .contact-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        border-radius: 50%;
        margin-bottom: 1.5rem;
    }

    .contact-icon i {
        font-size: 2rem;
        color: var(--brand-gold);
    }

    .contact-card h3 {
        font-size: 1.1rem;
        color: var(--brand-dark);
        margin-bottom: 0.75rem;
    }

    .contact-link {
        color: var(--brand-gold);
        font-size: 1.1rem;
        font-weight: 600;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .contact-link:hover {
        color: var(--brand-gold-light);
    }

    .contact-card p {
        color: var(--text-muted);
        margin-bottom: 0;
    }

    .section-title {
        color: var(--brand-dark);
    }

    .section-title::after {
        content: '';
        display: block;
        width: 60px;
        height: 3px;
        background: var(--brand-gold);
        margin: 15px auto 0;
    }

    .map-container {
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    }

    .map-container iframe {
        display: block;
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

    @media (max-width: 576px) {
        .contact-icon {
            width: 60px;
            height: 60px;
        }

        .contact-icon i {
            font-size: 1.5rem;
        }
    }
</style>
@endpush
