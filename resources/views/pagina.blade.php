<!DOCTYPE html>
<html>
<head>
    <link href="css/app.css" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

    @alerta(['tipo'=>'danger','titulo'=>'erro fatal danger'])
        <strong> ERRO</strong>: sua mensagem de erro.
    @endalerta

    @alerta(['tipo'=>'warning','titulo'=>'erro fatal warning'])
    <strong> ERRO</strong>: sua mensagem de erro.
    @endalerta

    @alerta(['tipo'=>'primary','titulo'=>'erro fatal primary'])
    <strong> ERRO</strong>: sua mensagem de erro.
    @endalerta

    @alerta(['tipo'=>'secondary','titulo'=>'erro fatal secondary'])
    <strong> ERRO</strong>: sua mensagem de erro.
    @endalerta

    @alerta(['tipo'=>'info','titulo'=>'erro fatal info'])
    <strong> ERRO</strong>: sua mensagem de erro.
    @endalerta

    @alerta(['tipo'=>'success','titulo'=>'erro fatal success'])
    <strong> ERRO</strong>: sua mensagem de erro.
    @endalerta

    @alerta(['tipo'=>'dark','titulo'=>'erro fatal dark'])
    <strong> ERRO</strong>: sua mensagem de erro.
    @endalerta

    @alerta()
        <strong> ERRO</strong>: sua mensagem de erro.
        @slot('titulo')
            erro fatal vermelho
        @endslot
        @slot('tipo')
            danger
        @endslot
    @endalerta

    <script src="js/app.js" type="text/javascript"></script>

</body>
</html>
