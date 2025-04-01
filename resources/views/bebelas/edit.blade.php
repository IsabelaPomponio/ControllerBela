@extends('layouts.app')

@section('title', 'Editar Bebela')

@section('content')
    <h1>Editar Bebela</h1>
    <form action="{{ route('bebelas.update', $bebela->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $bebela->name) }}" required>
        </div>

        <div class="form-group mt-3">
            <label for="description">Descrição</label>
            <textarea id="description" name="description" class="form-control" required>{{ old('description', $bebela->description) }}</textarea>
        </div>

        <button type="submit" class="btn btn-warning mt-3">Atualizar</button>
    </form>
    <a href="{{ route('bebelas.index') }}" class="btn btn-secondary mt-3">Voltar</a>
@endsection
