@extends('layouts.app')

@section('title', 'Lista de Bebelas')

@section('content')
    <h1>Lista de Bebelas</h1>
    <a href="{{ route('bebelas.create') }}" class="btn btn-primary">Adicionar Nova Bebela</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bebelas as $bebela)
                <tr>
                    <td>{{ $bebela->id }}</td>
                    <td>{{ $bebela->name }}</td>
                    <td>{{ $bebela->description }}</td>
                    <td>
                        <a href="{{ route('bebelas.edit', $bebela->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('bebelas.destroy', $bebela->id) }}" method="POST" style="display:inline;">
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
