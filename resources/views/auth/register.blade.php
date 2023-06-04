@extends('auth.layouts-app')
@section('content')
<div class="card mb-0">
    <div class="card-body">
      <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
        <img src="{{asset('assets/images/logos/dark-logo.svg')}}" width="180" alt="">
      </a>
      <p class="text-center">Your Social Campaigns</p>
      <form action="{{ route('register') }}" method="POST">
        @csrf

        <div class="row">

            <div class="col-6">
                <div class="form-group">
                    <label class="font-weight-bold text-uppercase">Full Name</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" placeholder="Masukkan Nama Lengkap">
                    @error('name')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>    
                    @enderror
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label class="font-weight-bold text-uppercase">Email address</label>
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan Alamat Email">
                    @error('email')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>    
                    @enderror
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label class="font-weight-bold text-uppercase">Password</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Masukkan Password">
                    @error('password')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>    
                    @enderror
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label class="font-weight-bold text-uppercase">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Masukkan Konfirmasi Password">
                </div>
            </div>

        </div>
        
        <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign Up</button>
        <div class="d-flex align-items-center justify-content-center">
          <p class="fs-4 mb-0 fw-bold">Already have an Account?</p>
          <a class="text-primary fw-bold ms-2" href="./authentication-login.html">Sign In</a>
        </div>
      </form>
    </div>
</div>
@endsection