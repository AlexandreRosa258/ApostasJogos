@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        img{
            width: 200px;
            height: 200px;
        }
        .card-panel{
            border-radius: 20px;
            width: 50%;
            margin: auto;
            display: block;
            margin-top: 0%;
            margin-bottom: 0;
        }
        h1{
            text-transform: uppercase;
        }
    </style>
</head>
<body>

    @foreach ( $logos as $logo)
    <h1 class="center">{{ $logo->nome }}</h1 class="center">
        <div class="container">
            <div class="row">
                <div class="col s12">
                  <div class="card-panel center">
                      <img src="{{url($logo->logo)}}" alt="">
                  </div>
                </div>
              </div>

        </div>


    @endforeach

    <button onclick="window.print()">Printar Pagina</button>
</body>
</html>
@endsection



