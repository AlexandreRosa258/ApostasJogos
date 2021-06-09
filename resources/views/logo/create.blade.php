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
       <div class="card-content black-text">
         <span class="card-title center"><h1>Time</h1></span>
       </div>
       <div class="card-action">
         <form action="{{route('logos.store')}}" method="post" enctype="multipart/form-data">
           @csrf



           <div class="row">
          <div class=" input-field col s6">
            <i class="material-icons prefix left">account_circle</i>
            <input  type="text" name="nome" >
            <label>Nome Time</label>
          </div>
          <div class="col s6">
            <div class="file-field">
                <div class="btn">
                  <span><i class="material-icons">camera_alt</i></span>
                  <input type="file" name="logo" multiple>
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" name="logo" type="text" placeholder="Upload one or more files">
                </div>
              </div>
          </div>
            </div>


         <button type="submit" class="btn blue darken-4"><i class="material-icons left">add</i>Savar</button>

         </form>
       </div>
     </div>
   </div>
 </div>
  </body>
</html>


@endsection
