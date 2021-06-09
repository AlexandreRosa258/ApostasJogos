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
        .image {
            width: 300px;
            height: 300px;
            border: #000 solid 1px;
            display: block;
        }

        img {
            width: 100%;
            height: 100%;
        }

        #botafogo {
            display: block;
            background-repeat: no-repeat;
            margin: auto;
            margin-top: 0%;
            margin-bottom: 0%;
            width: 100%;
            height: 100%;

        }


        .myDiv {
            display: none;
        }

        .myDiv img {
            margin: 0 auto;
        }

        .myDiv span {
            text-align: center;
            background: #ffdede;
            padding: 6px 10px;
            display: block;
            width: 100px;
            border: 1px solid #d47c7c;
            margin: 8px auto;
        }

    </style>


    <body>
        <div class="row">


            {{-- <div id="showTwo" class="myDiv">
                <img src="{{ asset('image/teste.png') }}" alt="HR" /><span>HR</span>
            </div>
            <div id="showThree" class="myDiv">
                <img src="{{ asset('image/teste.png') }}" alt="Developer" /><span>Developer</span>
            </div>
            <div class="container">
                <select id="myselection" class="browser-default">
                    <option>Select Option</option>
                    <option value="One">Manager</option>
                    <option value="Two">HR</option>
                    <option value="Three">Developer</option>
                </select> --}}


        </div>
        <div class="container">

            <form action="{{ route('partida.store') }}" method="POST">
                @csrf
                <div class="container">
                    <div class="row">
                        <div class="col s12">
                            <div class="col s6">
                                <select id="myselection" name="time1" class="browser-default">
                                    <option disabled selected>Selecione Time</option>
                                    @foreach ($logos as $items)
                                        <option value="{{ $items->id }}"  > {{ $items->nome }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col s6">
                                <select id="myselection" name="time2" class="browser-default">
                                    <option disabled selected>Selecione Time</option>
                                    @foreach ($logos as $items)
                                    <option value="{{ $items->id }}" > {{ $items->nome }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                    </div>



                </div>
                <div class="row">
                    <div class="col s6">
                        <div class="card-panel grey lighten-4">
                            <span>
                                <label for="hora">Hora</label>
                                <input name="hora" class="timepicker" min="9:00" max="20:00">
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
    <script>
        $(document).ready(function() {
            $('#myselection').on('change', function() {
                var demovalue = $(this).val();
                $("div.myDiv").hide();
                $("#show" + demovalue).show();
            });
        });

    </script>
    </html>
@endsection
