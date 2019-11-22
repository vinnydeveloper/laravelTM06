<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Pagina Home</h1>

    @foreach($usuarios as $usuario)
        <h2>{{$usuario->nome}}</h2>
    @endforeach
</body>
</html>