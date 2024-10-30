<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | SEOC - Digital Marketing Agency</title>
     <!--=====FAB ICON=======-->
     <link rel="shortcut icon" href="{{ URL::asset('build/img/logo/fav-logo1.png') }}" type="image/x-icon">

     @yield('css')

    @include('layouts.head-css')
</head>
<body class="homepage1-body">
    {{-- {{ URL::asset('build/img/all-images/Logo Kabelat.svg') }} --}}
@include('layouts.preloader')

@include('layouts.sidebar')

@yield('content')


@include('layouts.footer')
@include('layouts.footer-scripts')
@yield('scripts')

</body>
</html>