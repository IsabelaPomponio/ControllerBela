
    <div class="container">
        <h1>Editar Usuário</h1>
        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $user->name) }}" required>
            </div>

            <div class="form-group mt-3">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" required>
            </div>

            <div class="form-group mt-3">
                <label for="password">Senha</label>
                <input type="password" id="password" name="password" class="form-control">
                <small class="text-muted">Deixe em branco se não quiser alterar a senha.</small>
            </div>

            <div class="form-group mt-3">
                <label for="password_confirmation">Confirmar Senha</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
            </div>

            <button type="submit" class="btn btn-warning mt-3">Atualizar</button>
        </form>
        <a href="{{ route('users.index') }}" class="btn btn-secondary mt-3">Voltar</a>
    </div>
