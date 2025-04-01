@extends('layouts.app')

@section('title', 'Lista de Produtos')

@section('content')
    <h1>Lista de Produtos</h1>
    <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Adicionar Novo Produto</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Categoria</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ number_format($product->price, 2, ',', '.') }}</td>
                    <td>{{ $product->category->name ?? 'Sem Categoria' }}</td>
                    <td>
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
