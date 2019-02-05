@extends('layout.meulayout')

@section('meuproduto')

    Você escolheu a opção

    @if (isset($opcao))

         @switch($opcao)
             @case (1):
                  <span class="btn-primary">Azul</span>
                  @break;
             @case (2):
                  <span class="btn-warning">Vermelho</span>
                  @break;
             @case (3):
                  <span class="btn-success">Verde</span>
                  @break;
             @case (4):
                  <span class="btn-warning">Amarelo</span>
                  @break;
             @default:
                  <span class="btn-light">Branco</span>
         @endswitch

    @endif

@endsection


@section('title','PRODUTOS')

