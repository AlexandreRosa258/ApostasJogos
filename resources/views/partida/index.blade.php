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
        h1{
           text-align: center;
           background:#ddd;
        }
        h3{
            text-align: center;
        }
        h4{
            text-align: center;
        }
        img{
            width: 100%;
            height: 100%;
            margin: 0;
        }
        .quadro{
            width:358px;
	height:275px;
	border:4px solid #999;
        }
    </style>
</head>
<body>
    @foreach ( $partidas as $partida )
        <h1 class="center">{{ $partida->informacao }}</h1>
        <div class="container">
            <div class="row">
                <div class="col s12">
                  <div class="col s6">
                    <div class="quadro">
                        {{-- <p>{{ $partida->logo->nome}}</p> --}}
                        <img src="{{ $partida->logo->logo }}" alt="">
                        {{-- <p>{{ $partida->time2}}</p> --}}
                    </div>
                  </div>
                  <div class="col s6">
                    <div class="quadro">
                        {{-- <p>{{ $partida->logo->nome}}</p> --}}
                        <img src="{{ $partida->logo->logo }}" alt="">
                        {{-- <p>{{ $partida->time2}}</p> --}}
                    </div>
                  </div>
                </div>
              </div>
        </div>
        <h3>{{ $partida->data}} - {{ $partida->hora }}</h3>
        <h4>{{ $partida->local}}</h4>
    @endforeach

</body>
</html>


@endsection
