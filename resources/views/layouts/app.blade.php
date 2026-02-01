<!DOCTYPE html>
@php
    $routeName = Route::currentRouteName() ?? 'home';
    $seoKey = "messages.seo.{$routeName}";
    $seoTitle = __("{$seoKey}.title");
    $seoDescription = __("{$seoKey}.description");

    // Fallback se la chiave non esiste
    if ($seoTitle === "{$seoKey}.title") {
        $seoTitle = 'VLD Lab';
    }
    if ($seoDescription === "{$seoKey}.description") {
        $seoDescription = __('messages.seo.default_description');
    }

    $currentUrl = url()->current();
    $ogImage = asset('assets/img/og-image.jpg');
@endphp
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@hasSection('meta_title')@yield('meta_title')@else{{ $seoTitle }} - {{ __('messages.company_name') }}@endif</title>
    <meta name="description" content="@hasSection('meta_description')@yield('meta_description')@else{{ $seoDescription }}@endif">

    {{-- Canonical & Hreflang --}}
    <link rel="canonical" href="{{ $currentUrl }}">
    <link rel="alternate" hreflang="it" href="{{ route($routeName, ['locale' => 'it']) }}">
    <link rel="alternate" hreflang="en" href="{{ route($routeName, ['locale' => 'en']) }}">
    <link rel="alternate" hreflang="x-default" href="{{ route($routeName, ['locale' => 'it']) }}">

    {{-- Open Graph --}}
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ $currentUrl }}">
    <meta property="og:title" content="@hasSection('meta_title')@yield('meta_title')@else{{ $seoTitle }}@endif">
    <meta property="og:description" content="@hasSection('meta_description')@yield('meta_description')@else{{ $seoDescription }}@endif">
    <meta property="og:image" content="@hasSection('og_image')@yield('og_image')@else{{ $ogImage }}@endif">
    <meta property="og:locale" content="{{ app()->getLocale() == 'it' ? 'it_IT' : 'en_GB' }}">
    <meta property="og:locale:alternate" content="{{ app()->getLocale() == 'it' ? 'en_GB' : 'it_IT' }}">
    <meta property="og:site_name" content="VLD Lab">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@hasSection('meta_title')@yield('meta_title')@else{{ $seoTitle }}@endif">
    <meta name="twitter:description" content="@hasSection('meta_description')@yield('meta_description')@else{{ $seoDescription }}@endif">
    <meta name="twitter:image" content="@hasSection('og_image')@yield('og_image')@else{{ $ogImage }}@endif">

    {{-- dataLayer init (GTM loaded after cookie consent) --}}
    <script>window.dataLayer = window.dataLayer || [];</script>

    {{-- Favicon --}}
    <link rel="icon" type="image/png" href="{{ asset('assets/favicon/favicon-96x96.png') }}" sizes="96x96">
    <link rel="icon" type="image/svg+xml" href="{{ asset('assets/favicon/favicon.svg') }}">
    <link rel="shortcut icon" href="{{ asset('assets/favicon/favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon/apple-touch-icon.png') }}">
    <meta name="apple-mobile-web-app-title" content="VLD Lab">
    <link rel="manifest" href="{{ asset('assets/favicon/site.webmanifest') }}">

    {{-- Stylesheets --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}?v=2">
    <link rel="stylesheet" href="{{ asset('assets/css/vld.css') }}?v=2">

    @stack('styles')
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home', app()->getLocale()) }}">
            <img src="{{ asset('assets/img/logo_vld_lab.png') }}" alt="VLD LAB">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home', app()->getLocale()) }}">
                        {{ __('messages.menu.home') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services', app()->getLocale()) }}">
                        {{ __('messages.menu.services') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('portfolio') ? 'active' : '' }}" href="{{ route('portfolio', app()->getLocale()) }}">
                        {{ __('messages.menu.portfolio') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contacts') ? 'active' : '' }}" href="{{ route('contacts', app()->getLocale()) }}">
                        {{ __('messages.menu.contacts') }}
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('assets/img/flags/' . (app()->getLocale() == 'en' ? 'gb' : 'it') . '.svg') }}" alt="" class="flag-icon"> {{ strtoupper(app()->getLocale()) }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="languageDropdown">
                        <li><a class="dropdown-item {{ app()->getLocale() == 'it' ? 'active' : '' }}" href="{{ route(Route::currentRouteName(), ['locale' => 'it']) }}"><img src="{{ asset('assets/img/flags/it.svg') }}" alt="" class="flag-icon"> Italiano</a></li>
                        <li><a class="dropdown-item {{ app()->getLocale() == 'en' ? 'active' : '' }}" href="{{ route(Route::currentRouteName(), ['locale' => 'en']) }}"><img src="{{ asset('assets/img/flags/gb.svg') }}" alt="" class="flag-icon"> English</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main>
    @yield('content')
</main>

<footer class="site-footer text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-3">
                <h5 class="footer-title">VLD LAB di VINCENZO DI DEO</h5>
                <p class="small">{!! __('messages.footer.description') !!}</p>
            </div>
            <div class="col-md-4 mb-3">
                <h5 class="footer-title">{{ __('messages.footer.quick_links') }}</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('home', app()->getLocale()) }}" class="text-white text-decoration-none">{{ __('messages.menu.home') }}</a></li>
                    <li><a href="{{ route('services', app()->getLocale()) }}" class="text-white text-decoration-none">{{ __('messages.menu.services') }}</a></li>
                    <li><a href="{{ route('portfolio', app()->getLocale()) }}" class="text-white text-decoration-none">{{ __('messages.menu.portfolio') }}</a></li>
                    <li><a href="{{ route('contacts', app()->getLocale()) }}" class="text-white text-decoration-none">{{ __('messages.menu.contacts') }}</a></li>
                    <li><a href="{{ route('privacy-policy', app()->getLocale()) }}" class="text-white text-decoration-none">{{ __('messages.footer.privacy_policy') }}</a></li>
                    <li><a href="{{ route('cookie-policy', app()->getLocale()) }}" class="text-white text-decoration-none">{{ __('messages.footer.cookie_policy') }}</a></li>
                    <li><a href="#" class="text-white text-decoration-none manage-cookies-link">{{ __('messages.cookie_banner.manage_cookies') }}</a></li>
                </ul>
            </div>
            <div class="col-md-4 mb-3">
                <h5 class="footer-title">{{ __('messages.footer.contacts') }}</h5>
                <p class="mb-2">
                    <i class="bi bi-envelope"></i> info@vldlab.it<br>
                    <i class="bi bi-telephone"></i> +39 349 2829227
                </p>
                <p class="small mb-2">
                    P.IVA: 02783930692<br>
                    C.F.: DDIVCN83A20A485U<br>
                    Num. REA: CH - 425495
                </p>
                <p class="small mb-0">Via Giovanni Calabrò, 13/A<br>66034 Lanciano (CH) - Italy</p>
                <div class="mt-3">
                    <a href="https://www.linkedin.com/in/vincenzo-luca-di-deo-48470524/" target="_blank" rel="noopener noreferrer" class="text-white me-3" aria-label="LinkedIn">
                        <i class="bi bi-linkedin fs-5"></i>
                    </a>
                    <a href="https://github.com/vdideo" target="_blank" rel="noopener noreferrer" class="text-white" aria-label="GitHub">
                        <i class="bi bi-github fs-5"></i>
                    </a>
                </div>
            </div>
        </div>
        <hr class="border-secondary">
        <div class="text-center">
            <p class="mb-0 small">&copy; 2023-{{ date('Y') }} VLD LAB di Vincenzo Di Deo. {{ __('messages.footer.rights') }}</p>
        </div>
    </div>
</footer>

{{-- Cookie Banner --}}
<x-cookie-banner />

<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/cookie-consent.js') }}"></script>

@stack('scripts')


</body>
</html>
