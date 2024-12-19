<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

       
    </head>
    <body>
        <h1>criação de conta</h1><br>
        <form action="{{route('conta.store')}}" method="POST">
            @csrf
            <label>nome:</label>
            <input type="text" name="nome" id="nome" placeholder="Nome" required></input><br><br>
            <label>Valor:</label>
            <input type="text" name="nome" id="nome" placeholder="Usar o '.' para separa real do centavo" required></input><br><br>
            <label>validade:</label>
            <input type="date" name="validade" id="validade" required></input><br><br>
            <button type="submit">Cadastrar</button>
        </form>

        <a href="{{route('conta.index')}}">acessar as informações</a>
        
    </body>
</html>
