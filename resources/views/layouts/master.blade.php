<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      @isset($pageTitle)
        {{$pageTitle}}
      @endisset
    </title>
    <!-- material design icons -->
    <link rel="stylesheet" href="//cdn.materialdesignicons.com/2.5.94/css/materialdesignicons.min.css">
    <!-- font asesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
  </head>
  <body>
    <div id="app">
      <div class="main">
        @yield('content')
      </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://unpkg.com/vue"></script>
    <!-- Full bundle -->
    <script src="https://unpkg.com/buefy/dist/buefy.min.js"></script>
  </body>
</html>