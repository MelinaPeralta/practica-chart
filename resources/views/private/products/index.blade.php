@extends('layout')

@section('title')
<title>Productos</title>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row my-4">
        <div class="col-md-6">
            <div class="card" id="cardId">
                <div class="card-header" style="background-color: #FF6384;">
                    <h4 class="card-title">Productos</h4>
                </div><!-- /.card-header -->

                <div class="card-body">
                    <table class="table table-sm table-striped text-center">
                        <thead>
                            <tr>
                                <th style="width: 5%;">#</th>
                                <th>Nombre</th>
                                <th>Cantidad</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td class="align-middle">{{ $product->id }}</td>
                                <td class="align-middle">{{ $product->name }}</td>
                                <td class="align-middle">{{ $product->quantity }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div><!-- /.card-body -->
            </div><!-- /.card -->

            <form action="POST" action="productos/all" id="form1">
                @csrf
                <input type="hidden" name="id" value="1">
            </form>
Me gusta esto

        </div><!-- /.col -->
        <div class="col-md-6">
            <canvas id="barChart" width="400" height="400"></canvas>
        </div>
    </div><!-- /.row -->
</div>
@endsection

@section('scripts')
<script>
    var products = [];
    var values = [];

    $(document).ready(function() {
        $.ajax({
            url: '/productos/all',
            method: 'POST',
            data: {
                _token: $('input[name="_token"]').val()
            }
        }).done(function(res) {
            var array_products = JSON.parse(res);
            console.log(res);

            for (var i = 0; i < array_products.length; i++) {
                products.push(array_products[i].name);
                values.push(array_products[i].quantity);
            }
            addChart()
        });
    })

    // $(document).ready(function() {
    //     $.ajax({
    //         url: '/productos/all',
    //         method: 'POST'
    //     }).done(function(res) {
    //         var data = JSON.parse(res);
    //         console.log(res);

    //         for (var i = 0; i < data.length; i++) {
    //             products.push(data[i].name);
    //             values.push(data[i].quantity);
    //         }
    //         addChart()
    //     });
    // })


    function addChart() {
        var ctx = document.getElementById('barChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: products,
                datasets: [{
                    label: 'Inventario',
                    data: values,
                    backgroundColor: function(context) {
                        var index = context.dataIndex;
                        var value = context.dataset.data[index];

                        return value < 5 ? 'red' : 'blue'
                    },
                    // backgroundColor: [
                    //     'rgba(255, 99, 132, 0.2)',
                    //     'rgba(54, 162, 235, 0.2)',
                    //     'rgba(255, 206, 86, 0.2)',
                    //     'rgba(75, 192, 192, 0.2)',
                    //     'rgba(153, 102, 255, 0.2)',
                    //     'rgba(255, 159, 64, 0.2)',
                    //     'rgba(255, 192, 203, 0.2)'
                    // ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 192, 203, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                },
                title: {
                    display: true,
                    text: 'Título del gráfico'
                }
            }
        });

    }
</script>


@endsection