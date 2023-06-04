@extends('auth.layouts-app')
@section('content')
<div class="card mb-0">
    <div class="card-body">
      <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
        <img src="{{asset('assets/images/logos/dark-logo.svg')}}" width="180" alt="">
      </a>
      <p class="text-center">Your Social Campaigns</p>
      @if ($errors->has('email'))
          <div class="alert alert-danger">
              {{ $errors->first('email') }}
          </div>
      @endif
      <form action="{{ route('login') }}" method="POST">
      @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email Address</label>
            <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Masukkan Alamat Email">
        </div>
        <div class="mb-4">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Masukkan Password">
        </div>
        <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Login</button>
        <div class="d-flex align-items-center justify-content-center">
          <p class="fs-4 mb-0 fw-bold">Already have an Account?</p>
          <a class="text-primary fw-bold ms-2" href="./authentication-login.html">Sign In</a>
        </div>
      </form>
    </div>
</div>
@endsection