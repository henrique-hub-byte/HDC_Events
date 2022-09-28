@extends('layouts.main')
@section('title', 'HDC Events')

@section('content')
    <h1>algum titulo</h1>
    @if ($nome == 'luis')
        <p>o nome é {{ $nome }}</p>
        <p>idade é {{ $idade }}</p>
    @elseif($nome == 'morrigan')
        <p>o nome é {{ $nome }}</p>
    @elseif($nome == 'loki')
        <p>o nome é {{ $nome }}</p>
    @endif
    <hr>
    @for($i = 0; $i < count($lista); $i++)
        <p>{{$lista[$i]}}</p>
    @endfor
    <hr>
    @foreach($names as $name)
    <p>{{$loop->index}}</p>
    <p>{{$name}}</p>

    @endforeach
@endsection