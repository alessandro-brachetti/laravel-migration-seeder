<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                font-family: 'Nunito', sans-serif;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
                flex-wrap: wrap;
            }
            .card {
              width: 19%;
              background-color: lightgreen;
              margin-right: 10px;
              margin-bottom: 10px;
            }
            h1 {
                text-align: center;
            }
            span {
              color: #636b6f;
            }
        </style>
    </head>
    <body>
        <h1>Travel Packages</h1>
        <div class="flex-center position-ref ">
            @foreach ($packages as $package)
            <div class="card">
              <p>ID: <span>{{$package->id}}</span></p>
              <p>City: <span>{{$package->destination}}</span></p>
              <p>Flight-Number: <span>{{$package->flight_number}}</span></p>
              <p>Available-Seats: <span>{{$package->available_seats}}</span></p>
              <p>Hotel: <span>{{$package->hotel}}</span></p>
              <p>Departure: <span>{{$package->departure}}</span></p>
              <p>Arrival: <span>{{$package->arrival}}</span></p>
              <p>Price: <span>{{$package->price}}</span></p>
            </div>
            @endforeach
        </div>
    </body>
</html>
