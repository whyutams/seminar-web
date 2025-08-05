@extends("layouts.form")

@section("title", "Seminar Registration")

@section("content")
  <section class="section container" style="min-height: 80vh;">
    <div class="row justify-content-center align-items-center">
    <div class="col-md-8 col-lg-7">
      <div class="card shadow p-4 mt-5">
      <h3 class="mb-3 text-center">Register</h3>

      @if (session('success'))
      <div class="alert alert-success">
      {{ session('success') }}
      </div>
    @endif

      @if ($errors->any())
      <div class="alert alert-danger">
      {{ $errors->first() }}
      </div>
    @endif


      <form method="POST" action="{{ url('register') }}">
        @csrf

        <div class="mb-3">
        <label for="name" class="form-label">Name <small>(with titles if any)</small> <span class="text-danger">*</span></label>
        <input type="text" id="name" name="name"
          class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
        @error('name')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
        </div>

        <div class="mb-3">
        <label for="department" class="form-label">Department / Faculty <span class="text-danger">*</span></label>
        <select id="department-dropdown" name="department"
          class="form-select @error('department') is-invalid @enderror" disabled required>
          <option selected disabled value=""></option>
        </select>
        @error('department')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
        </div>

        <div class="mb-3">
        <label for="institution" class="form-label">Institution <span class="text-danger">*</span></label>
        <select id="institution-dropdown" name="institution"
          class="form-select @error('institution') is-invalid @enderror" disabled required>
          <option selected disabled value=""></option>
        </select>
        @error('institution')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
        </div>

        <div class="mb-3">
        <label for="country" class="form-label">Country <span class="text-danger">*</span></label>
        <select id="country-dropdown" name="country" class="form-select @error('country') is-invalid @enderror"
          disabled required>
          <option selected disabled value=""></option>
        </select>
        @error('country')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
        </div>

        <div class="mb-3">
        <label for="phone" class="form-label">Phone Number <span class="text-danger">*</span></label>
        <input type="text" id="phone" name="phone" class="form-control @error('phone') is-invalid @enderror"
          value="{{ old('phone') }}" required>
        @error('phone')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
        </div>

        <div class="mb-3">
        <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
        <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror"
          value="{{ old('email') }}" required>
        @error('email')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
        </div>

        <div class="mb-3">
        <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
        <input type="password" id="password" name="password"
          class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" required>
        @error('password')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
        </div>

        <div class="mb-3">
        <label for="password_confirmation" class="form-label">Password Confirmation <span class="text-danger">*</span></label>
        <input type="password" id="password_confirmation" name="password_confirmation"
          class="form-control @error('password_confirmation') is-invalid @enderror"
          value="{{ old('password_confirmation') }}" required>
        @error('password_confirmation')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
        </div>

        <div class="d-grid">
        <button type="submit" class="btn-custom1">Register</button>
        </div>

        <div class="mt-4 text-center d-flex justify-content-between">
        <a href="{{ url('/') }}">Back to Home</a>
        <a href="{{ route('login') }}">Login</a>
        </div>
      </form>
      </div>
    </div>
    </div>
  </section>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
    fetch('{{ asset('json/universitas.json') }}')
      .then(res => res.json())
      .then(data => {
      const select = document.getElementById('institution-dropdown');
      const oldValue = "{{ old('institution') }}";

      data.forEach((u, i) => {
        const option = document.createElement('option');
        option.value = u.name;
        option.textContent = u.name;

        if (u.name == oldValue) option.selected = true;

        select.appendChild(option);

        if (i + 1 == data.length) select.disabled = false;
      });
      });

    fetch('{{ asset('json/country.json') }}')
      .then(res => res.json())
      .then(data => {
      const select = document.getElementById('country-dropdown');
      const oldValue = "{{ old('country') }}";

      data.forEach((c, i) => {
        const option = document.createElement('option');
        option.value = c;
        option.textContent = c;

        if (c == oldValue) option.selected = true;

        select.appendChild(option);

        if (i + 1 == data.length) select.disabled = false; else if (c == data[0]) option.selected = true;
      });
      });

    fetch('{{ asset('json/bidang.json') }}')
      .then(res => res.json())
      .then(data => {
      const select = document.getElementById('department-dropdown');
      const oldValue = "{{ old('department') }}";

      data.forEach((c, i) => {
        const option = document.createElement('option');
        option.value = c;
        option.textContent = c;

        if (c == oldValue) option.selected = true;

        select.appendChild(option);

        if (i + 1 == data.length) select.disabled = false;
      });
      });
    });
  </script>
@endsection