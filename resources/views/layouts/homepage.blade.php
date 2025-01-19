<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | </title>
  
    @yield('fav')
     @yield('css')

    @include('layouts.head-css')
</head>
<body class="body">

@yield('content')
 
@include('layouts.footer-scripts')
@yield('scripts')

</body>
</html>