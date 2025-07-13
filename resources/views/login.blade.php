<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Login - Seminar Internasional 2025</title>

  <!-- Vendor & Template CSS -->
  <link href="{{ asset('templates/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('templates/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('templates/css/main.css') }}" rel="stylesheet">
  <link href="{{ asset('templates/css/style.css') }}" rel="stylesheet">
</head>

<body class="index-page">
 

  <main class="main container">
    <section class="section container" style="min-height: 80vh;">
      <div class="row justify-content-center align-items-center">
        <div class="col-md-6 col-lg-5">
          <div class="card shadow p-4 mt-5">
            <h3 class="mb-3 text-center">Login</h3>

            @if ($errors->any())
              <div class="alert alert-danger">
                {{ $errors->first() }}
              </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
              @csrf
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email"
                  class="form-control @error('email') is-invalid @enderror"
                  value="{{ old('email') }}" required autofocus>
                @error('email')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password"
                  class="form-control @error('password') is-invalid @enderror"
                  required>
                @error('password')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <div class="d-grid">
                <button type="submit" class="btn-custom1">Login</button>
              </div>

              <div class="mt-3 text-center">
                <a href="{{ url('/') }}">← Kembali ke Beranda</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main> 

  <script src="{{ asset('templates/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('templates/js/main.js') }}"></script>
</body>

</html>
