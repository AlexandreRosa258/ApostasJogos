@extends('layouts.app')
@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="/css/test/create.css">
    </head>

    <style>
        .image{
            width: 300px;
            height: 300px;
            border:#000 solid 1px;
            display: block;
        }
        img{
            width: 100%;
            height: 100%;
        }
        #botafogo{
            display: block;
            background-repeat: no-repeat;
            margin: auto;
            margin-top: 0%;
            margin-bottom: 0%;
            width: 100%;
            height: 100%;

        }
    </style>


    <body>
        <div class="row">
            {{-- <div class="col s6">
                <div class="image">
                    <img src="{{ asset('image/brasao.jpg') }}" alt="">
                </div>
                <select class="browser-default">
                  <option value="" disabled selected>Choose your option</option>
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                </select>
            </div> --}}
            {{-- <div class="col s6">
                <div class="image">
                    <img id="botafogo" src="{{ asset('image/brasao2.png') }}" alt="">
                </div>
                <select class="browser-default">
                  <option value="" disabled selected>Choose your option</option>
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                </select>
            </div>
        </div>--}}
        <div class="container">

            <form action="{{ route('formJogos.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col s6">
                        <div class="card-panel grey lighten-4">
                         <span>
                             <label for="hora">Hora</label>
                             <input name="hora" type="time" min="9:00" max="20:00" >
                             <label for="Data">Data</label>
                        <input type="text" name="data" class="datepicker">
                         </span>
                        </div>

                    </div>

                    <div class="col s6">
                        <div class="card-panel grey lighten-4">
                        <label for="Local">Local</label>
                        <input type="text" name="local">
                        <label for="Informações">Informações</label>
                        <textarea name="informacao" class="materialize-textarea" data-length="120"></textarea>
                        </div>
                    </div>

                </div>
                <button type="submit" class="btn blue darken-4"><i class="material-icons left">add</i>Savar</button>
            </form>
        </div>

    </body>

    </html>


@endsection
