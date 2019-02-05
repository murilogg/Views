@extends('layout.app')

@section('titulo',' - FILHO')

@section('conteudo')
<p>USANDO SECTION PARA PAI E FILHO</P>
@endsection


@section('pai')
@parent
<p>CONTEUDIO DO FILHO</p>
@endsection

