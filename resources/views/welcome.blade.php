<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

       
    </head>
    <body>
        <h1>página de entrada</h1>
        <a href="{{route('conta.index')}}">acessar as informações</a>
    </body>
</html>