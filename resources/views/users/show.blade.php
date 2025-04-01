@extends('layouts.app')

@section('title', 'Detalhes do Usuário')

@section('content')
    <h1>Detalhes do Usuário</h1>
    <p><strong>ID:</strong> {{ $user->id }}</p>
    <p><strong>Nome:</strong> {{ $user->name }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>

    <a href="{{ route('users.index') }}" class="btn btn-secondary mt-3">Voltar</a>
    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning mt-3">Editar</a>
@endsection
