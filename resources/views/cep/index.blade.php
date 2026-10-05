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
        <p>Cidade: {{$endereco['localidade']}}</p>
    @endisset

</body>
</html>