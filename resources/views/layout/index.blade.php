<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- bootstrap CSS --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    {{-- CSS --}}
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    {{-- CSRF Laravel --}}
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Portal de Disciplina</title>
</head>

<body class="content-body">
    {{-- @yield('navbar') --}}
    
    @component('components.navbar')
    @endcomponent

    <div class="container">
        <div class="row">
            <div class="col-12 text-center my-4 title-subject-container">
                <h1 class="title-subject">Portal das Disciplinas - IMD/UFRN</h1>
            </div>
        </div>
        @yield('content')
    </div>

    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</body>
</html>