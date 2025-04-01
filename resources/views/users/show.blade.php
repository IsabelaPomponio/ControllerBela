
    <div class="container">
        <h1>Detalhes do Usuário</h1>
        <p><strong>ID:</strong> {{ $user->id }}</p>
        <p><strong>Nome:</strong> {{ $user->name }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>

        <a href="{{ route('users.index') }}" class="btn btn-secondary mt-3">Voltar</a>
        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning mt-3">Editar</a>
    </div>
