<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>@yield("title")</title>

  <!-- Vendor & Template CSS -->
  <link href="{{ asset('templates/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('templates/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
  <!-- Custom -->
  <link href="{{ asset('templates/css/main.css') }}" rel="stylesheet">
  <link href="{{ asset('templates/css/style.css') }}" rel="stylesheet">

  <!-- jQuery -->
  <script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="{{ asset('adminlte/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
</head>

<body class="index-page" style="background-color: #eee;">
  @include("components/header")


  <main class="main container">
    @yield("content")
  </main>

  <script src="{{ asset('templates/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- Select2 -->
  <script src="{{asset('adminlte/plugins/select2/js/select2.full.min.js')}}"></script>
  <script src="{{ asset('templates/js/main.js') }}"></script>
</body>

</html>