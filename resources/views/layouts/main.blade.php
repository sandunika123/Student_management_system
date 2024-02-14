<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Management</title>

    @include('libraries.styles')
  </head>
  <body>
    @include('libraries.script')
    @include('components.nav')

    @yield('pageContent')

    @include('components.footer')

  </body>
</html>
