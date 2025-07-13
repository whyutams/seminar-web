<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>@yield("title")</title>

  <!-- Vendor & Template CSS -->
  <link href="{{ asset('templates/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('templates/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('templates/css/main.css') }}" rel="stylesheet">
  <link href="{{ asset('templates/css/style.css') }}" rel="stylesheet">
</head>

<body class="index-page">
 

  <main class="main container">
    @yield("content")
  </main> 

  <script src="{{ asset('templates/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('templates/js/main.js') }}"></script>
</body>

</html>
