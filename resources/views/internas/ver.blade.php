@extends('internas.theme')

@section('content')
<a href="/panel" class="btn btn-outline-info btn-sm mb-3">{{ __('Return') }}</a>
<h5 class="card-title fw-semibold mb-4">{{ __('Detail') }}</h5>
<div class="card">
  <div class="card-body">
    <h5 class="card-title">{{ $empleado->nombre." ".$empleado->a_pat." ".$empleado->a_mat }}</h5>
    <p class="card-text"><b>{{ __('Employee Code') }}:</b> {{ $empleado->c_empleado }}</p>
    <p class="card-text"><b>{{ __('Birth date') }}:</b> {{ date('Y-m-d', strtotime($empleado->f_nacimiento)) }}</p>
    <p class="card-text"><b>{{ __('Age') }}:</b> {{ $empleado->edad }}</p>
    <p class="card-text"><b>{{ __('Gender') }}:</b> {{ $empleado->genero }}</p>
    <p class="card-text"><b>{{ __('Salary') }} $MXN:</b> ${{ $empleado->s_base }}</p>
    <p class="card-text"><b>{{ __('Salary') }} $USA:</b> ${{ $empleado->s_base_usa }} ({{ __('Calculation Date') }} | {{$empleado->usa_cal}})</p>
  </div>
  <figure class="highcharts-figure">
      <div id="container"></div>
  </figure>
</div>
@endsection
@push('scripts')
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/series-label.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/modules/export-data.js"></script>
  <script src="https://code.highcharts.com/modules/accessibility.js"></script>
  <script>
    // Data retrieved https://en.wikipedia.org/wiki/List_of_cities_by_average_temperature
    Highcharts.chart('container', {
        chart: {
            type: 'spline'
        },
        title: {
            text: '{{ __('Chart Title') }}'
        },
        xAxis: {
            categories: ['Q1', 'Q2', 'Q3', 'Q4', 'Q5', 'Q6'],
            accessibility: {
                description: 'Months of the year'
            }
        },
        yAxis: {
            title: {
                text: '{{ __('Money') }}'
            },
            labels: {
                format: '{value}'
            }
        },
        tooltip: {
            crosshairs: true,
            shared: true
        },
        series: [{
            name: 'Peso MXN',
            data: [
              <?php $pivSB="$empleado->s_base"; ?>
              @for ($i = 1; $i <= 6; $i++)
                <?php $pivSB = $pivSB * 1.04; echo round($pivSB,2).",";?>
              @endfor
            ]
        }, {
            name: '{{ __('Dollar') }} USA',
            data: [
              <?php $pivSBUSA="$empleado->s_base_usa"; ?>
              @for ($i = 1; $i <= 6; $i++)
                <?php $pivSBUSA = $pivSBUSA * 1.04; echo round($pivSBUSA,2).",";?>
              @endfor
            ]
        }]
    });

  </script>
@endpush