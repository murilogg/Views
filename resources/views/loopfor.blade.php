@extends('layout.meulayout')

@section('meuproduto')
<h1>LOOP FOR</h1>
@for($i=0;$i<$n;$i++)
    <p>Numero : {{$i}}</p>
@endfor

@endsection


@section('title','PRODUTOS')

