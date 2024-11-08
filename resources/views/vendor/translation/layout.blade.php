<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@lang('backend.language-panel') | TechFOZ</title>
    <link rel="icon" href="{{ asset('backend/images/logos/logo-w.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('/vendor/translation/css/main.css') }}">
</head>
<body>
    <div id="app">
        @include('translation::nav')
        @include('translation::notifications')
        @yield('body')
    </div>
    <script src="{{ asset('/vendor/translation/js/app.js') }}"></script>
</body>
</html>
