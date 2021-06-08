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
    </style>
</head>
<body>
    @foreach ( $forms as $form )
        <h1 class="center">{{ $form->informacao }}</h1>
        <h3>{{ $form->data}} - {{ $form->hora }}</h3>
        <h4>{{ $form->local}}</h4>
    @endforeach
</body>
</html>
