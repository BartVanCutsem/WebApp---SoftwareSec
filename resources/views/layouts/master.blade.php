<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('Partials.header')
        
        <title>
          @yield("title")
        </title>
    </head>
    <body class="antialiased">
      @include("Partials.navbar")

    @yield('content')
  </body>
</html>