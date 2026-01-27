@extends('layouts.app')

@section('title', __('messages.portfolio.title'))

@section('content')
    {{-- Hero Section --}}
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-auto mb-4 mb-md-0">
                    <img src="{{ asset('assets/img/vincenzo_di_deo.jpg') }}" alt="Vincenzo Di Deo" class="hero-photo">
                </div>
                <div class="col-md-auto text-center text-md-start">
                    <h1>{{ __('messages.portfolio.title') }}</h1>
                    <p class="lead mb-0">{{ __('messages.portfolio.subtitle') }}</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Portfolio Section --}}
    <section class="py-5">
        <div class="container">
            @if($items->isEmpty())
                <div class="text-center py-5">
                    <p class="text-muted">{{ __('messages.portfolio.empty') }}</p>
                </div>
            @else
                <div class="row">
                    @foreach($items as $item)
                        <x-portfolio-card :item="$item" />
                    @endforeach
                </div>
            @endif
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

    .portfolio-card {
        background: #fff;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .portfolio-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
    }

    .portfolio-image {
        position: relative;
        overflow: hidden;
        aspect-ratio: 16 / 10;
    }

    .portfolio-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .portfolio-card:hover .portfolio-image img {
        transform: scale(1.05);
    }

    .portfolio-content {
        padding: 1.5rem;
    }

    .portfolio-year {
        display: inline-block;
        background-color: var(--brand-gold);
        color: var(--brand-dark);
        font-size: 0.75rem;
        font-weight: 600;
        padding: 0.25rem 0.75rem;
        border-radius: 20px;
        margin-bottom: 0.75rem;
    }

    .portfolio-title {
        font-size: 1.25rem;
        font-weight: 700;
        color: var(--brand-dark);
        margin-bottom: 0.5rem;
    }

    .portfolio-description {
        font-size: 0.95rem;
        color: #6c757d;
        margin-bottom: 0;
        line-height: 1.6;
    }

    .portfolio-partner {
        font-size: 0.85rem;
        color: #6c757d;
        margin-top: 0.75rem;
        margin-bottom: 0;
    }

    .portfolio-partner i {
        color: var(--brand-gold);
        margin-right: 0.25rem;
    }

    .btn-portfolio {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        background-color: var(--brand-gold);
        color: var(--brand-dark);
        font-size: 0.85rem;
        font-weight: 600;
        padding: 0.5rem 1rem;
        border-radius: 6px;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .btn-portfolio:hover {
        background-color: var(--brand-gold-light);
        color: var(--brand-dark);
        transform: translateY(-2px);
    }

    .btn-portfolio i {
        font-size: 0.8rem;
    }
</style>
@endpush
