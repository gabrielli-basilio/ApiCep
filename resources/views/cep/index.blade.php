<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form action="{{ route('cep.consultar') }}" method="post">
        @csrf
        <input type="text" name="cep" required>

        <button type="submit">Consultar CEP</button>

    </form>

    <!-- Mostrar os dados, caso haja -->

    @isset($endereco)
        <p>Cidade: <b>{{$endereco['localidade']}}</b></p>
        <p>Rua: <b>{{$endereco['logradouro']}}</b></p>
        <p>Bairro: <b>{{$endereco['bairro']}}</b></p>
        <p>Estado: <b>{{$endereco['estado']}} - {{$endereco['uf']}}</b></p>
        <p>Região: <b>{{$endereco['regiao']}}</b></p>
        
    @endisset

</body>
</html>