<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('layouts.partials._header-pdf')
  </head>
  <body>
    @yield('content')

    @include('layouts.partials._script-pdf')
  </body>
</html>
