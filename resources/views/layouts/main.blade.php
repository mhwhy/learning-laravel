<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WEBKU | </title>

    @include('partials.style')

  </head>
  <body >

    @include('partials.navbar')

<div class="container">
    @yield('container')
</div>

@include('partials.footer')


@include('partials.javascript')


  </body>
</html>
