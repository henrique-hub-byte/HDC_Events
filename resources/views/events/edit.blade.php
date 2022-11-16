@extends('layouts.main')

@section('title', 'Edit')

@section('content')
    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Editando: {{ $event->title }}</h1>
        <form action="/events/update/{{ $event->id }}" method="POST" enctype='multipart/form-data'>
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Imagem do Evento:</label>
                <input type="file" name="image" class="form-control-file">
                <img class="img-preview" src="/img/events/{{ $event->image}}" alt="/img/events/{{ $event->image}}"  style="width: 100px;">
            </div>
            <br>
            <div class="form-group"> 
                <label for="title">Evento:</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $event->title}}">
            </div>
            <br>
            <div class="form-group">
                <label for="date">Data do evento:</label>
                <input type="date" class="form-control" id="date" name="date" value="{{ $event->date->format('Y-m-d') }}">
            </div>
            <br>
            <div class="form-group">
                <label for="title">Cidade:</label>
                <input type="text" class="form-control" id="city" name="city" value="{{ $event->city }}">
            </div>
            <br>
            <div class="form-group">
                <label for="title">O evento é privado?</label>
                <select name="private" id="private" class="form-control">
                    <option value="0">Não</option>
                    <option value="1" {{ $event->private == 1 ? "selected='selected'" : "" }}>Sim</option>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for="title">Descrição:</label>
                <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento? ">{{ $event->description }}</textarea>

                <br>
                <div class="form-group">
                    <label for="" class="title">Adicione itens de infraestrutura:</label>
                </div>
                <div class="form-group">
                    <input type='checkbox' name='items[]' value='Cadeiras'>Cadeiras
                </div>
                <div class="form-group">
                    <input type='checkbox' name='items[]' value='Palco'>Palco
                </div>
                <div class="form-group">
                    <input type='checkbox' name='items[]' value='Cerveja grátis'>Cerveja grátis
                </div>
                <div class="form-group">
                    <input type='checkbox' name='items[]' value='Open food'>Open food
                </div>
                <div class="form-group">
                    <input type='checkbox' name='items[]' value='Brindes'>Brindes
                </div>
            </div>
            <input type="submit" value="Criar Evento" class="btn btn-primary">
        </form>
    </div>
@endsection
