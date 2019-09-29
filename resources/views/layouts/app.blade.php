<!-- stranica koju svuda ukljucujemo,tj ona ce biti kao neki okvir -->
<!-- KOSTUR -->
<!-- NA OSNOVU OVE STRANICE SE POPUNJAVA MATERIJAL -->
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- FONTAWESOME -->
    <script src="https://kit.fontawesome.com/bae25c5699.js" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title> Kulminacija znanja </title>
        
    </head>
    <body data-spy="scroll" data-target="#navbarSupportedContent">
    
        @include('inc.navbar')
        @yield('kod') <!-- ovde dolazi kod ( u ovaj kostur ) koji smo kucali negde posebno  -->

    </body>    
</html>