<!doctype html>
<html lang="en">
<head>
    @include('backend.system.includes.meta')
    @include('backend.system.includes.styles')
    @yield('styles')
</head>
<body data-topbar="dark">
<div id="layout-wrapper">
    @include('backend.system.includes.header')
</div>
@include('backend.system.includes.sidebar')
@yield('content')
@include('sweetalert::alert')
@include('backend.system.includes.scripts')
@yield('scripts')
@include('backend.system.includes.footer')
</body>
</html>
