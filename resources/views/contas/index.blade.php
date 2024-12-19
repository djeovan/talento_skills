<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

       
    </head>
    <body>
        <a href="{{route('conta.create')}}">criar</a>
        <h1>página um</h1>
        <a href="{{route('conta.edit')}}">editar</a><br>
        <a href="{{route('conta.show')}}">mostrar conta</a>
    </body>
</html>
