@extends('internas.theme')

@section('content')
<a href="/panel" class="btn btn-outline-info btn-sm mb-3">{{ __('Return') }}</a>
<h5 class="card-title fw-semibold mb-4">{{ __('Employees: new') }}</h5>
<form action="/nuevoup" method="POST">
  @csrf
  <div class="mb-3">
    <label for="nombre" class="form-label">{{ __('Name') }}</label>
    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}" required>
  </div>
  <div class="mb-3">
    <label for="nombre" class="form-label">{{ __('A_pat') }}</label>
    <input type="text" class="form-control" id="nombre" name="a_pat" value="{{ old('a_pat') }}" required>
  </div>
  <div class="mb-3">
    <label for="nombre" class="form-label">{{ __('A_mat') }}</label>
    <input type="text" class="form-control" id="nombre" name="a_mat" value="{{ old('a_mat') }}" required>
  </div>
  <div class="mb-3">
    <label for="edad" class="form-label">{{ __('Age') }}</label>
    <input type="text" class="form-control" id="edad" name="edad" value="{{ old('edad') }}">
  </div>
  <div class="mb-3">
    <label for="f_nacimiento" class="form-label">{{ __('Birth date') }}</label>
    <input type="text" class="form-control" id="f_nacimiento" name="f_nacimiento" value="{{ old('f_nacimiento') }}" required>
  </div>
  <div class="mb-3">
    <label for="genero" class="form-label">{{ __('Gender') }}</label>
    <input type="text" class="form-control" id="genero" name="genero" value="{{ old('genero') }}">
  </div>
  <div class="mb-3">
    <label for="s_base" class="form-label">{{ __('Salary type') }}</label>
    <input type="text" class="form-control" id="s_base" name="s_base" value="{{ old('s_base') }}" required>
  </div>
  <button type="submit" class="btn btn-primary">{{ __('Create') }}</button>
</form>
@endsection