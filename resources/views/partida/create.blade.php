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
        <link rel="stylesheet" href="/css/partida/create.css">
    </head>
    <body>
        </div>
        <div class="container">

            <form action="{{ route('partida.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="container">
                    <div class="row">
                        <div class="col s12">
                            <div class="col s6">
                                <select id="myselection" name="time1" class="browser-default">
                                    <option disabled selected>Selecione Time</option>
                                    @foreach ($logos as $items)
                                        <option value="{{ $items->id }}" onchange="previewImagem()" > {{ $items->nome }}</option>
                                        <img style="width: 150px; height: 150px;" src="{{$items->logo}}">
                                    @endforeach
                                </select>
                            </div>
                            <div class="col s6">
                                <select id="myselection" name="time2" class="browser-default">
                                    <option disabled selected>Selecione Time</option>
                                    @foreach ($logos as $items)
                                    <option value="{{ $items->id }}" data-icon="{{$items->logo}}" > {{ $items->nome }}</option>
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
                    <div class="col s12">
                        <div class="file-field">
                            <div class="btn">
                              <span><i class="material-icons">camera_alt</i></span>
                              <input type="file" name="fundo" multiple>
                            </div>
                            <div class="file-path-wrapper">
                              <input class="file-path validate" name="fundo" type="text" placeholder="Imagem de Fundo">
                            </div>
                          </div>
                      </div>
                    </div>

                </div>
                <div class="container center">
                    <button type="submit" class="btn red darken-4"><i class="material-icons left">add</i>Savar</button>
                <a class="waves-effect waves-light btn red darken-4" href="{{route('partida.index')}}">
                    <i class="material-icons left">keyboard_return</i>Voltar</a>
                </div>
            </form>
        </div>

    </body>
    </html>
@endsection
{{-- <script>
    function previewImagem(){
        var imagem = document.querySelector('input[name=imagem]').files[0];
        var preview = document.querySelector('img');

        var reader = new FileReader();

        reader.onloadend = function () {
            preview.src = reader.result;
        }

        if(imagem){
            reader.readAsDataURL(imagem);
        }else{
            preview.src = "";
        }
    }
</script> --}}
