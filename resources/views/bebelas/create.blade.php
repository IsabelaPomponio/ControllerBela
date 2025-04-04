@extends('layouts.app')

@section('title', 'Adicionar Nova Bebela')

@section('content')
    <h1>Adicionar Nova Bebela</h1>
    <form action="{{ route('bebelas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" required>
        </div>

        <div class="form-group mt-3">
            <label for="description">Descrição</label>
            <textarea id="description" name="description" class="form-control" required>{{ old('description') }}</textarea>
        </div>

        <button type="submit" class="btn btn-success mt-3">Salvar</button>
    </form>
    <a href="{{ route('bebelas.index') }}" class="btn btn-secondary mt-3">Voltar</a>
@endsection
