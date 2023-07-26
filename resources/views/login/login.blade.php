@extends('login.logtheme')

@section('content')
<p class="text-center">{{ __('Session') }}</p>
<form method="POST" action="/login">
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">{{ __('nom/mail') }}</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="username" required autofocus value="{{ old('email') }}">
  </div>
  <div class="mb-4">
    <label for="exampleInputPassword1" class="form-label">{{ __('Password') }}</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" require>
  </div>
  <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">{{ __('Login') }}</button>
  <div class="d-flex align-items-center justify-content-center">
    <p class="fs-4 mb-0 fw-bold">{{ __('Are you new here?') }}</p>
    <a class="text-primary fw-bold ms-2" href="/alta">{{ __('Create account') }}</a>
  </div>
</form>
@endsection