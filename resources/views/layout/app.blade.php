<html>
<head>
    <title>MINHA PAGINA @yield('titulo')</title>
</head>
<body>
    <div>
        @yield('conteudo')

        @section('pai')
        <p>CONTEUDO DO PAI</p>
        @show



    </div>
</body>
</html>

