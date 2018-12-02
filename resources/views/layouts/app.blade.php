

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>

  <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.css') }}"  media="screen,projection"/>
  <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">

</head>
<body>



  @yield('content')

  <!--  Scripts-->
  <script type="text/javascript" src="{{ asset('js/jquery331.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/materialize.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/init.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>

  <script type="text/javascript" src="{{ asset('js/home.js') }}"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        }
    });
</script>
  </body>
</html>
