
    <div class="container">
        <h1>Adicionar Novo Usuário</h1>
        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" required>
            </div>

            <div class="form-group mt-3">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" required>
            </div>

            <div class="form-group mt-3">
                <label for="password">Senha</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>

            <div class="form-group mt-3">
                <label for="password_confirmation">Confirmar Senha</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success mt-3">Salvar</button>
        </form>
        <a href="{{ route('users.index') }}" class="btn btn-secondary mt-3">Voltar</a>
    </div>
