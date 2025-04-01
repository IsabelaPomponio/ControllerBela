@extends('layouts.app')

@section('title', 'Detalhes do Produto')

@section('content')
    <h1>Detalhes do Produto</h1>
    <p><strong>ID:</strong> {{ $product->id }}</p>
    <p><strong>Nome:</strong> {{ $product->name }}</p>
    <p><strong>Descrição:</strong> {{ $product->description }}</p>
    <p><strong>Preço:</strong> R$ {{ number_format($product->price, 2, ',', '.') }}</p>
    <p><strong>Categoria:</strong> {{ $product->category->name ?? 'Sem Categoria' }}</p>

    <a href="{{ route('products.index') }}" class="btn btn-secondary mt-3">Voltar</a>
    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning mt-3">Editar</a>
@endsection
