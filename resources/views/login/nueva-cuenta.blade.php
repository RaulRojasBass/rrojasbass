@extends('login.logtheme')

@section('content')
<p class="text-center">{{ __('Register') }}</p>
<form method="POST" action="/usuarioup">
  @csrf
  <div class="mb-3">
    <label for="exampleInputtext1" class="form-label">{{ __('Name') }}</label>
    <input type="text" class="form-control" id="exampleInputtext1" name="username" value="{{ old('username') }}">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">{{ __('Email') }}</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="{{ old('email') }}">
  </div>
  <div class="mb-4">
    <label for="exampleInputPassword1" class="form-label">{{ __('Password') }}</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <div class="mb-4">
    <label for="exampleInputPassword1" class="form-label">{{ __('Password Confirmation') }}</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password_confirmation">
  </div>
  <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">{{ __('Check In') }}</button>
  <div class="d-flex align-items-center justify-content-center">
    <p class="fs-4 mb-0 fw-bold">{{ __('Register') }}</p>
    <a class="text-primary fw-bold ms-2" href="/">{{ __('Login') }}</a>
  </div>
</form>
@endsection