<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('Partials.header')
    </head>
    <body class="antialiased">
      @include("Partials.navbar")

    @yield('content')
    </body>
</html>