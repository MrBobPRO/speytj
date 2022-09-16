<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta name="robots" content="none" />
  <meta name="googlebot" content="noindex, nofollow" />
  <meta name="yandex" content="none" />

  <title>@hasSection('title')@yield('title'){{ ' — Spey' }}@else{{ 'Spey' }}@endif</title>

  <meta property="og:site_name" content="Spey">
  <meta property="og:type" content="object">
  <meta name="twitter:card" content="summary_large_image">

  @hasSection ('meta-tags')
    @yield('meta-tags')
  @else
    <meta name="description" content="Spey — это международная компания, деятельность которой направлена на улучшение жизни людей путем предоставления инновационной и востребованной продукции в сфере здравоохранения. Компания Spey ведет свою деятельность на международном фармацевтическом рынке уже более 15 лет.">
    <meta property="og:title" content="Spey">
    <meta property="og:description" content="Spey — это международная компания, деятельность которой направлена на улучшение жизни людей путем предоставления инновационной и востребованной продукции в сфере здравоохранения. Компания Spey ведет свою деятельность на международном фармацевтическом рынке уже более 15 лет.">
    <meta property="og:image" content="{{ asset('img/main/logo-share.png') }}">
    <meta property="og:image:alt" content="Spey logo">
  @endif

  {{-- Google Roboto Fonts --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

  {{-- Normalize CSS --}}
  <link rel="stylesheet" href="{{ asset('plugins/normalize.css') }}">

  {{-- Material Icons --}}
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons">

  {{-- Owl Carousel --}}
  <link rel="stylesheet" href="{{ asset('plugins/owl-carousel/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/owl-carousel/owl.theme.default.min.css') }}">

  {{-- Selectize --}}
  <link rel="stylesheet" href="{{ asset('plugins/selectize/selectize.css') }}">

  {{-- Plyr --}}
  <link rel="stylesheet" href="{{ asset('plugins/plyr/plyr.css') }}">

  <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>

<body>
  @include('layouts.header')
  <main class="main">
    @yield('main')
  </main>
  @include('layouts.footer')
  <x-svg-sprite />

  {{-- JQuery --}}
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  {{-- Owl Carousel --}}
  <script src="{{ asset('plugins/owl-carousel/owl.carousel.min.js') }}"></script>

  {{-- Selectize --}}
  <script src="{{ asset('plugins/selectize/selectize.min.js') }}"></script>

  {{-- Yandex share buttons --}}
  <script src="https://yastatic.net/share2/share.js"></script>

  {{-- Appear JQ --}}
  <script src="{{ asset('plugins/appear.js') }}"></script>

  {{-- Plyr --}}
  <script src="{{ asset('plugins/plyr/plyr.polyfilled.js') }}"></script>

  <script src="{{ asset('js/app.js') }}"></script>
  {{-- App bundled styles & scripts --}}
  {{-- @vite('resources/js/app.js') --}}
</body>

</html>
