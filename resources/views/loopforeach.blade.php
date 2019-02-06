@extends('layout.meulayout')

@section('meuproduto')

<h1>LOOP FOREACH ARRAYS ASSOCIATIVOS</h1>

@foreach($produtos as $p)
    <p>{{ $p['id'] }}: {{ $p['nome'] }}</p>
@endforeach

<hr>

@foreach($produtos as $p)
    <p>
        {{ $p['id'] }}: {{ $p['nome'] }}

    @if($loop->first)
       (primeiro)
    @endif
    @if($loop->last)
       (ultimo)
    @endif
<span class="badge badge-secondary">
    {{ $loop->index}} / {{$loop->count-1}} / {{ $loop->remaining }}
</span>
<span class="badge badge-warning">
    {{ $loop->iteration}} / {{$loop->count}}
</span>
    </p>
@endforeach

@endsection




