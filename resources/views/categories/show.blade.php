@extends('layouts.app')

@section('title', 'Detalhes da Categoria')

@section('content')
    <h1>Detalhes da Categoria</h1>
    <p><strong>ID:</strong> {{ $category->id }}</p>
    <p><strong>Nome:</strong> {{ $category->name }}</p>
    <p><strong>Descrição:</strong> {{ $category->description }}</p>

    <a href="{{ route('categories.index') }}" class="btn btn-secondary mt-3">Voltar</a>
    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning mt-3">Editar</a>
@endsection
