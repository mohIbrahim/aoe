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

	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-rtl/bootstrap-rtl.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/ar/app.css') }}">

    @yield('head')
</head>
<body>
    @include('ar.layouts.nav.main_nav')
    <div class="container">
        @include('flash::message')
    </div>
    @yield('content')

    {{-- Go top Button --}}
    <button type="button" class="btn btn-primary btn-sm pull-right scrollToTop glyphicon glyphicon-circle-arrow-up" style="z-index: 10000"></button>

    @include('ar.layouts.footer.footer')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('js_footer')
</body>
</html>
