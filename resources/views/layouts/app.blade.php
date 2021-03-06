<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- FONTAWESOME -->
    <script src="https://kit.fontawesome.com/bae25c5699.js" crossorigin="anonymous"></script>
    
    <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
    <!--CKEditor je linija koda iznad -->
    <title> Kulminacija znanja </title>
       
</head>
<body data-spy="scroll" data-target="#navbarSupportedContent">
    {{-- <div id="app"> --}}

        {{-- <main class="py-4"> --}}
        @include('inc.navbar')
        @yield('content')
            
        {{-- </main> --}}
        <script>
            CKEDITOR.replace( 'article-ckeditor' );
    </script>
        {{-- </div> --}}

</body>
</html>
