@extends("layouts.form")

@section("title", "Login")

@section("content")
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
                        <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                        <input type="email" id="email" name="email"
                            class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                            required autofocus>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                        <input type="password" id="password" name="password"
                            class="form-control @error('password') is-invalid @enderror" required>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn-custom1">Login</button>
                    </div>

                    <div class="mt-4 text-center d-flex justify-content-between">
                        <a href="{{ url('/') }}">Back to Home</a>
                        <a href="{{ url('/register') }}">Register</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection