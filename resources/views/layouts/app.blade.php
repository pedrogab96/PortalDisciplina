<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- bootstrap CSS --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    {{-- CSS --}}
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" href="{{asset('css/sidebar.css')}}">
    {{-- CSRF Laravel --}}
    <meta name="csrf-token" content="{{csrf_token()}}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Portal de Disciplina</title>
</head>

<body class="content-body">
    {{-- @yield('navbar') --}}
    
    @component('components.navbar')
    @endcomponent

    @component('components.sidebar')
    @endcomponent

    <div class="container">
        <div class="row">
            <div class="col-12 text-center my-4 title-subject-container">
                <h1 class="title-subject">Portal das Disciplinas - IMD/UFRN</h1>
            </div>
        </div>
        @yield('content')
    </div>

    
    {{-- bootstrap JS --}}
    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
    {{-- Sidebar JS --}}
    <script src="{{asset('js/sidebar.js')}}" type="text/javascript"></script>
</body>
</html>