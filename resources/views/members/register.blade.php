@extends('members.layouts.main')

@section('content')
    
<!--start content-->
<main class="authentication-content">
  <div class="container">
    <div class="mt-4">
      <div class="col-lg-6 mx-auto">
        <div class="card p-4 p-sm-5 rounded-0 overflow-hidden shadow-none bg-white border">
          <h5 class="card-title">Register Akun</h5>
          <p class="card-text mb-4">Silakan registrasi akun dahulu untuk mendapatkan akses ke dalam dashboard</p>
          <div class="row g-0">
            <div class="col-12">
              <div class="card-body p-0">
                <form action="/register" method="POST" class="form-body">
                  @csrf
                  <div class="mb-3">
                    <label for="name" class="form-label">Nama Lengkap</label>
                    <div class="ms-auto position-relative">
                      <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-person-circle"></i></div>
                      <input type="text" class="form-control @error('name') is-invalid @enderror radius-30 ps-5" id="name" name="name" placeholder="Masukkan nama lengkap" value="{{ old('name') }}">
                    </div>
                    @error('name')
                    <small class="text-danger">
                      {{ $message }}
                    </small>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <div class="ms-auto position-relative">
                      <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-envelope-fill"></i></div>
                      <input type="email" class="form-control @error('email') is-invalid @enderror radius-30 ps-5" id="email" name="email" placeholder="Masukkan email kamu" value="{{ old('email') }}">
                    </div>
                    @error('email')
                    <small class="text-danger">
                      {{ $message }}
                    </small>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <div class="ms-auto position-relative">
                      <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-lock-fill"></i></div>
                      <input type="password" class="form-control @error('password') is-invalid @enderror radius-30 ps-5" id="password" name="password" placeholder="Masukkan password">
                    </div>
                    @error('password')
                    <small class="text-danger">
                      {{ $message }}
                    </small>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="repeat" class="form-label">Ulangi Password</label>
                    <div class="ms-auto position-relative">
                      <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-lock-fill"></i></div>
                      <input type="password" class="form-control @error('repeat') is-invalid @enderror radius-30 ps-5" id="repeat" name="repeat" placeholder="Ulangi password">
                    </div>
                    @error('repeat')
                    <small class="text-danger">
                      {{ $message }}
                    </small>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary radius-30 px-5">Register</button>
                    </div>
                  </div>
                  <div class="mb-3 text-center">
                    <p class="mb-0">Sudah punya akun? <a href="/">Sign in disini</a></p>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 </main>
<!--end page main-->

@endsection