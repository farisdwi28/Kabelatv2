<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | SEOC - Digital Marketing Agency</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('build/img/logo/fav-logo1.png') }}" type="image/x-icon">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    @yield('css')
    @include('layouts.head-css')
</head>

<body class="homepage1-body">
    <!-- Preloader -->
    @include('layouts.preloader')

    <!-- Sidebar -->
    @include('layouts.sidebar')

    <!-- Main Content -->
    @yield('content')

    @include('layouts.footer')
    @include('layouts.footer-scripts')
    @yield('scripts')
</body>

</html>
