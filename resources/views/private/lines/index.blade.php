@extends('layout')

@section('title')
<title>Lineas</title>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <canvas id="myChart"></canvas>
        </div>
    </div>
</div>
@endsection



@section('scripts')
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',

        // The data for our dataset
        data: {
            labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio'],
            datasets: [{
                label: 'Progreso primer semestre',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(240, 99, 132)',
                data: [0, 10, 5, 2, 20, 25, 35, 40]
            }]
        },

        // Configuration options go here
        options: {}
    });
</script>

@endsection