@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ( $logos as $logo)
    <p>{{ $logo->nome }}</p>
    <img src="{{url($logo->logo)}}" alt="">
    {{-- <img src="logo/js01.png" alt=""> --}}
    @endforeach
</body>
</html>
@endsection



