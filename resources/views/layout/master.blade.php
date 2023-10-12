<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- fabicon --}}
    <link rel="icon" type='image/x-icon' href="{{ asset('images/logo_icon.ico') }}">
    @yield('css')
    <title>@yield('title') - Corporación Acción Integra</title>
</head>
<body>
    <div id="app">
        <v-app app>
            @guest
                @include('layout.navbar')
            @endguest
            @yield('content')
        </v-app>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/navbar.js') }}"></script>
    @yield('js')
</body>
</html>
