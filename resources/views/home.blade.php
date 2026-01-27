@extends('layouts.app')

@section('title', __('messages.menu.home'))

@section('content')
    {{-- Hero Section --}}
    <section class="home-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 text-center mb-5 mb-lg-0">
                    <img src="{{ asset('assets/img/vincenzo_giacca.jpg') }}" alt="Vincenzo Di Deo" class="hero-portrait">
                </div>
                <div class="col-lg-7 text-center text-lg-start">
                    <p class="hero-greeting mb-2">{{ __('messages.home.hero_greeting') }}</p>
                    <h1 class="hero-name mb-3">{{ __('messages.home.hero_name') }}</h1>
                    <p class="hero-role mb-4">{{ __('messages.home.hero_role') }}</p>
                    <a href="{{ route('services', app()->getLocale()) }}" class="btn btn-cta btn-lg px-5">
                        {{ __('messages.home.hero_cta') }}
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- About Section --}}
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h2 class="section-title text-center mb-4">{{ __('messages.home.about_title') }}</h2>
                    <p class="lead text-center mb-4">{!! __('messages.home.about_intro') !!}</p>
                    <p class="text-muted text-center">{!! __('messages.home.about_focus') !!}</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Skills Section --}}
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h2 class="section-title text-center mb-4">{{ __('messages.home.skills_title') }}</h2>
                    <p class="text-center mb-4">{!! __('messages.home.skills_intro') !!}</p>
                    <p class="text-center mb-4"><strong>{{ __('messages.home.skills_list_intro') }}</strong></p>
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="skill-card h-100">
                                <div class="skill-icon">
                                    <i class="bi bi-cart4"></i>
                                </div>
                                <p>{!! __('messages.home.skills_ecommerce') !!}</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="skill-card h-100">
                                <div class="skill-icon">
                                    <i class="bi bi-cloud"></i>
                                </div>
                                <p>{!! __('messages.home.skills_software') !!}</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="skill-card h-100">
                                <div class="skill-icon">
                                    <i class="bi bi-diagram-3"></i>
                                </div>
                                <p>{!! __('messages.home.skills_integration') !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Beyond Section --}}
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2 class="section-title text-center mb-4">{{ __('messages.home.beyond_title') }}</h2>
                    <p class="text-muted">{!! __('messages.home.beyond_p1') !!}</p>
                    <p class="text-muted">{!! __('messages.home.beyond_p2') !!}</p>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
<style>
    .home-hero {
        background: linear-gradient(135deg, var(--brand-dark) 0%, var(--brand-dark-deep) 100%);
        padding: 80px 0;
        color: white;
    }

    .hero-portrait {
        max-width: 100%;
        max-height: 500px;
        object-fit: cover;
        border-radius: 20px;
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.4);
    }

    .hero-greeting {
        font-size: 1.3rem;
        color: rgba(255, 255, 255, 0.7);
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    .hero-name {
        font-size: 3.5rem;
        font-weight: 700;
        color: var(--brand-gold);
    }

    .hero-role {
        font-size: 1.4rem;
        color: rgba(255, 255, 255, 0.85);
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

    .skill-card {
        background: white;
        padding: 2rem;
        border-radius: 10px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .skill-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .skill-icon {
        font-size: 2.5rem;
        color: var(--brand-gold);
        margin-bottom: 1rem;
    }

    .skill-card p {
        margin-bottom: 0;
        color: var(--text-muted);
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

    @media (max-width: 991px) {
        .hero-name {
            font-size: 2.5rem;
        }

        .hero-portrait {
            max-height: 400px;
        }
    }

    @media (max-width: 576px) {
        .home-hero {
            padding: 60px 0;
        }

        .hero-name {
            font-size: 2rem;
        }

        .hero-role {
            font-size: 1.1rem;
        }

        .hero-portrait {
            max-height: 350px;
        }
    }
</style>
@endpush
