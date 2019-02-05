<!DOCTYPE html>
<html>
<head>
    <link href="css/app.css" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    @if(isset($produtos))
        @if(count($produtos) == 0)
            <h1>NENHUM PRODUTOS</h1>
        @elseif(count($produtos) === 1)
            <h1>UM PRODUTO</h1>
        @else
            <h1>TEMOS VARIOS PRODUTOS</h1>
        @endif

    @foreach($produtos as $p)
        <p>Nome : <b>{{$p}}</b></p>
    @endforeach

    @else
        <h2>NÃO TEMOS PRODUTOS</h2>
    @endif

    @empty($produtos)
    <h2>nada em produtos</h2>
    @endempty


<script src="js/app.js" type="text/javascript"></script>

</body>
</html>
