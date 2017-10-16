<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>
        @yield('title')
    </title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    @if(session()->has('locale') && session('locale') == 'ar')
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-rtl/bootstrap-rtl.min.css')}}">
    @endif
    @yield('head')
</head>
<body>
    @include('layouts.nav.main_nav')
    @yield('content')
    @include('layouts.footer.footer')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('js_footer')
</body>
</html>
