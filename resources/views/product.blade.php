@extends('layouts.main')

@section('title', 'Product')

@section('content')

    @if ($id != null)
        <h1>Exbidindo produto id {{ $id }} </h1>
    @endif
@endsection
