<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manutenzione - VLD Lab</title>

    <link rel="icon" type="image/png" href="{{ asset('assets/favicon/favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('assets/favicon/favicon.svg') }}" />
    <link rel="shortcut icon" href="{{ asset('assets/favicon/favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon/apple-touch-icon.png') }}" />
    <meta name="apple-mobile-web-app-title" content="VLD Lab" />
    <link rel="manifest" href="{{ asset('assets/favicon/site.webmanifest') }}" />

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}?v=2">
    <link rel="stylesheet" href="{{ asset('assets/css/vld.css') }}?v=2">

    <style>
        .maintenance-content {
            min-height: calc(100vh - 200px);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .maintenance-icon {
            font-size: 5rem;
            color: #6c757d;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/img/logo_vld_lab.png') }}" alt="VLD LAB">
        </a>
    </div>
</nav>

<main class="maintenance-content">
    <div class="container">
        <div class="text-center">
            <i class="bi bi-tools maintenance-icon mb-4"></i>

            <div class="mb-5" id="italiano">
                <h1 class="display-5 fw-bold text-dark mb-3">Sito in manutenzione</h1>
                <p class="lead text-muted">Torneremo presto online.</p>
            </div>

            <hr class="w-50 mx-auto my-4">

            <div id="english">
                <h1 class="display-5 fw-bold text-dark mb-3">Site under maintenance</h1>
                <p class="lead text-muted">We'll be back online soon.</p>
            </div>
        </div>
    </div>
</main>

<footer class="site-footer text-white py-5 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-3">
                <h5 class="footer-title">VLD LAB di VINCENZO DI DEO</h5>
                <p class="small">Soluzioni tecnologiche innovative per la tua azienda.<br>Innovative technology solutions for your business.</p>
            </div>
            <div class="col-md-6 mb-3">
                <h5 class="footer-title">Contatti / Contacts</h5>
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
            </div>
        </div>
        <hr class="border-secondary">
        <div class="text-center">
            <p class="mb-0 small">&copy; 2023-{{ date('Y') }} VLD LAB di Vincenzo Di Deo. Tutti i diritti riservati. / All rights reserved.</p>
        </div>
    </div>
</footer>

<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>
