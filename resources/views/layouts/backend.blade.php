<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="{{ asset('backend/assets/img/favicon.ico') }}"/>
    <link rel="stylesheet" href="{{ asset('css/backend.css') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&amp;display=swap" rel="stylesheet">

    <!-- Styles Page -->
    @yield('extra-css')
</head>
<body>

<!-- BEGIN LOADER -->
<div id="load_screen">
    <div class="loader">
        <div class="loader-content">
            <div class="spinner-grow align-self-center"></div>
        </div>
    </div>
</div>
<!--  END LOADER -->

<!--  BEGIN NAVBAR  -->
@include('layouts.backend.nav')
<!--  END NAVBAR  -->

<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container" id="app">

    <div class="overlay"></div>
    <div class="search-overlay"></div>

    <!--  BEGIN SIDEBAR  -->
    @include('layouts.backend.sidebar')
    <!--  END SIDEBAR  -->

    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <main>
            @yield('content')
        </main>
        @include('layouts.backend.footer')
    </div>
    <!--  END CONTENT AREA  -->

</div>
<!-- END MAIN CONTAINER -->

<!-- Script -->
<script src="{{ asset('js/backend.js') }}"></script>
<!-- BEGIN EXTRA SCRIPTS -->
@yield('extra-js')
<!-- END EXTRA SCRIPTS -->

</body>
</html>
