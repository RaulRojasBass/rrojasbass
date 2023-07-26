@extends('internas.theme')

@section('content')
<h5 class="card-title fw-semibold mb-4">{{ __('Employees') }}</h5>
<div class="table-responsive-sm">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">{{ __('Number of Employees') }}</th>
        <th scope="col">{{ __('Name') }}</th>
        <th scope="col">{{ __('Salary') }}</th>
        <th scope="col">{{ __('Actions') }}</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($empleados as $empleado)
        <tr>
          <th scope="row">{{ $empleado->id }}</th>
          <th>{{ $empleado->c_empleado }}</th>
          <th>{{ $empleado->nombre." ".$empleado->a_pat." ".$empleado->a_mat }}</th>
          <th>{{ $empleado->s_base }}</th>
          <th>
            <a href="/ver/<?php echo $empleado->id; ?>"><i class="ti ti-eye fs-6"></i>{{ __('View') }}</a>
            <a href="/editar/<?php echo $empleado->id; ?>"><i class="ti ti-edit fs-6"></i>{{ __('Edit') }}</a>
            @if ($empleado->estatus=='activo')
              <a href="/estatus/inactivar/<?php echo $empleado->id; ?>"><i class="ti ti-square-x fs-6"></i>{{ __('Activate') }}</a>
            @else
              <a href="/estatus/activar/<?php echo $empleado->id; ?>"><i class="ti ti-checkbox fs-6"></i>{{ __('Inactivate') }}</a>
            @endif
            <a href="/estatus/eliminar/<?php echo $empleado->id; ?>"><i class="ti ti-trash fs-6"></i>{{ __('Eliminate') }}</a>
          </th>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection