<!DOCTYPE html>
<html>

<head>
    <title>@yield('title') | {{ Utility::getsettings('app_name') }}</title>
    <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    @if (Utility::getsettings('seo_setting') == 'on')
        {!! app('seotools')->generate() !!}
    @endif
    <!-- Favicon icon -->

    <link rel="icon"
        href="{{ Utility::getsettings('favicon_logo') ? Storage::url('app-logo/app-favicon-logo.png') : '' }}"
        type="image/png">
    <!-- Font Google -->
    {{-- <link href="../css?family=Montserrat:400,500,600,700,800&display=swap" rel="stylesheet"> --}}
    {{-- <link href="../css-1?family=Raleway:400,500,600,700&display=swap" rel="stylesheet"> --}}
    <!-- custom styles (optional) -->
    <link href="{{ asset('assets/front/css/plugins.css') }}?v=<?=time()?>" rel="stylesheet">
    <link href="{{ asset('assets/front/css/style2.css') }}?v=<?=time()?>" rel="stylesheet">
    @yield('css')
</head>

<body class="hamburger-menu dsn-effect-scroll dsn-ajax" data-dsn-mousemove="true">
