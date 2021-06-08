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
  <body>
<div class="row">
   <div class="col s12">
     <div class="card">
       <div class="card-content white-text">
         <span class="card-title"><h3>Jogos</h3></span>
       </div>
       <div class="card-action">
         <form action="" method="post">
           @csrf

           <div class="row">
          <div class="input-field col s12">

          </div>
          <div class="input-field col s12" >

          </div>
         <button type="submit" class="btn blue darken-4"><i class="material-icons left">add</i>Salvar</button>

         </form>
       </div>
     </div>
   </div>
 </div>
  </body>
</html>


@endsection
