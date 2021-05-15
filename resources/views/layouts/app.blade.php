<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="google-site-verification" content="CaID-sWQ4oro51-MUzVaQlu5v5a4XqK2Xpg9uVmONKI"/>
    <meta name="lang" content="pt-BR">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="portal das disciplinas, imd">
    <meta name="robots" content="@yield('robots','all')">
    <title>@yield('title', 'Portal das Disciplinas IMD')</title>
    <meta name="description" content="@yield('description','Conheça as disciplinas do IMD de forma mais prática!')">
    {{-- <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"> --}}
    {{-- CSRF Laravel --}}
    <meta name="csrf-token" content="{{csrf_token()}}">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="{{asset('mentor/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('mentor/assets/vendor/icofont/icofont.min.css')}}">
    <link rel="stylesheet" href="{{asset('mentor/assets/vendor/boxicons/css/boxicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('mentor/assets/vendor/remixicon/remixicon.css')}}">
    <link rel="stylesheet" href="{{asset('mentor/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('mentor/assets/vendor/animate.css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('mentor/assets/vendor/aos/aos.css')}}">

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="{{asset('mentor/assets/css/style.css')}}">

    @yield('styles-head')
    @yield('scripts-head')
</head>

<body class="d-flex flex-column min-vh-100">
@include('layouts.partials.header')
@include('layouts.partials.system-alerts')

<main id="main">
<div class="container mb-5">
    @yield('content')
</div>
</main>

@include('layouts.partials.footer')

{{-- bootstrap JS --}}
<script src="{{asset('js/app.js')}}" type="text/javascript"></script>
{{-- Sidebar JS --}}
<script src="{{asset('js/sidebar.js')}}" type="text/javascript"></script>

@yield('scripts-bottom')

</body>
</html>
