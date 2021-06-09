@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/partida/index.css">
    <title>Document</title>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col s12 center">
                <a class="waves-effect waves-light btn red darken-4" href="{{route('partida.create')}}">
                    <i class="material-icons left">add</i>Salvar</a>
            </div>
        </div>
    </div>
    @foreach ( $partidas as $partida )
        <div class="parallax"><img id="fundo" src="{{ $partida->fundo }}" alt=""></div>


        <h1 class="center">{{ $partida->informacao }}</h1>
        <div class="container">
            <div class="row">
                <div class="col s12">
                  <div class="col s6">
                    <div class="quadro">
                        <img src="{{ $partida->logo->logo }}" alt="">
                    </div>
                  </div>
                  <div class="col s6">
                    <div class="quadro">
                     <img src="{{ $partida->logo->logo }}" alt="">
                    </div>
                  </div>
                </div>
              </div>
        </div>
        <h3>{{ $partida->data}} - {{ $partida->hora }}</h3>
        <h4>{{ $partida->local}}</h4>
        {{-- <div class="parallax"><img id="fundo" src="{{ $partida->fundo }}" alt=""></div> --}}
        @endforeach
    </div>
</body>
</html>


@endsection
