@extends("layouts.form")

@section("title", "Seminar Registration")

@section("content")
<section class="section container" style="min-height: 80vh;">
  <div class="row justify-content-center align-items-center">
    <div class="col-md-8 col-lg-7">
      <div class="card shadow p-4 mt-5">
        <h3 class="mb-3 text-center">Seminar Registration</h3>

        @if ($errors->any())
          <div class="alert alert-danger">
            {{ $errors->first() }}
          </div>
        @endif

        <form method="POST" action="">
          @csrf

          <div class="mb-3">
            <label for="full_name" class="form-label">Full Name <small>(with titles if any)</small></label>
            <input type="text" id="full_name" name="full_name"
              class="form-control @error('full_name') is-invalid @enderror"
              value="{{ old('full_name') }}" required>
            @error('full_name')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="department" class="form-label">Department / Faculty</label>
            <input type="text" id="department" name="department"
              class="form-control @error('department') is-invalid @enderror"
              value="{{ old('department') }}" required>
            @error('department')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="institution" class="form-label">Institution</label>
            <input type="text" id="institution" name="institution"
              class="form-control @error('institution') is-invalid @enderror"
              value="{{ old('institution') }}" required>
            @error('institution')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="country" class="form-label">Country</label>
            <input type="text" id="country" name="country"
              class="form-control @error('country') is-invalid @enderror"
              value="{{ old('country') }}" required>
            @error('country')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="text" id="phone" name="phone"
              class="form-control @error('phone') is-invalid @enderror"
              value="{{ old('phone') }}" required>
            @error('phone')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" id="email" name="email"
              class="form-control @error('email') is-invalid @enderror"
              value="{{ old('email') }}" required>
            @error('email')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="d-grid">
            <button type="submit" class="btn-custom1">Submit Registration</button>
          </div>

          <div class="mt-4 text-center">
            <a href="{{ url('/') }}">Back to Home</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection
