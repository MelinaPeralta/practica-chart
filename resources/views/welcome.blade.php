<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Práctica Chart Js</title>


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        .flex-center {
            margin-top: 70px;
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .flex-center-btn {
            margin-top: 10px;
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .button {
            border: 0;
            text-align: center;
            display: inline-block;
            padding: 14px;
            margin: 7px;
            color: #FFFFFF;
            background-color: #FF6384;
            border-radius: 8px;
            font-family: "proxima-nova-soft", sans-serif;
            font-weight: 500;
            text-decoration: none;
            transition: box-shadow 200ms ease-out;
        }

        a {
            color: #f27173;
            text-decoration: none;
            font-size: 2rem;
        }
    </style>


</head>

<body>
    <div class="content">
        <div class="flex-center">
            <img src="img/javascript-chart-js.jpg" alt="">
        </div>
        <div class="flex-center-btn">
            <a class="button" href="/productos">Comenzar</a>
            <!-- <a class="button" href="{{ url('/barras') }}">Comenzar</a> -->
        </div>
    </div>

</body>

</html>