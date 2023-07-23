@extends('theme')

@section('content')
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
  data-sidebar-position="fixed" data-header-position="fixed">
  <div
    class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
    <div class="d-flex align-items-center justify-content-center w-100">
      <div class="row justify-content-center w-100">
        <div class="col-md-8 col-lg-6 col-xxl-3">
          <div class="card mb-0">
            <div class="card-body">
              <p class="text-center">Login</p>
              <form method="POST" action="/login">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Correo</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" name="email" required autofocus value="{{ old('email') }}">
                </div>
                <div class="mb-4">
                  <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="password" require>
                </div>
                <div class="d-flex align-items-center justify-content-between mb-4">
                  <div class="form-check">
                    <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label text-dark" for="flexCheckChecked" name="remember">
                      Recordar Sesión
                    </label>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Ingresar</button>
                @if ($errors->any())
                  <ul class="alert alert-danger" role="alert">
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                @endif
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection