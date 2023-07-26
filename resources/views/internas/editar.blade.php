@extends('internas.theme')

@section('content')
<a href="/panel" class="btn btn-outline-info btn-sm mb-3">{{ __('Return') }}</a>
<h5 class="card-title fw-semibold mb-4">{{ __('Employees: new') }}</h5>
<form action="/editarup" method="POST">
  @csrf
  <input type="text" class="invisible" id="id" name="id" value="{{ $empleado->id }}">
  <div class="mb-3">
    <label for="nombre" class="form-label">{{ __('Name') }}</label>
    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $empleado->nombre }}" required>
  </div>
  <div class="mb-3">
    <label for="nombre" class="form-label">{{ __('A_pat') }}</label>
    <input type="text" class="form-control" id="nombre" name="a_pat" value="{{ $empleado->a_pat }}" required>
  </div>
  <div class="mb-3">
    <label for="nombre" class="form-label">{{ __('A_mat') }}</label>
    <input type="text" class="form-control" id="nombre" name="a_mat" value="{{ $empleado->a_mat }}" required>
  </div>
  <div class="mb-3">
    <label for="edad" class="form-label">{{ __('Age') }}</label>
    <input type="text" class="form-control" id="edad" name="edad" value="{{ $empleado->edad }}">
  </div>
  <div class="mb-3">
    <label for="f_nacimiento" class="form-label">{{ __('Birth date') }}</label>
    <input type="text" class="form-control" id="f_nacimiento" name="f_nacimiento" value="{{ date('Y-m-d', strtotime($empleado->f_nacimiento)); }}" required>
  </div>
  <div class="mb-3">
    <label for="genero" class="form-label">{{ __('Gender') }}</label>
    <input type="text" class="form-control" id="genero" name="genero" value="{{ $empleado->genero }}">
  </div>
  <div class="mb-3">
    <label for="s_base" class="form-label">{{ __('Salary type') }}</label>
    <input type="text" class="form-control" id="s_base" name="s_base" value="{{ $empleado->s_base }}" required>
  </div>
  <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
</form>
@endsection