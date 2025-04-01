
    <div class="container">
        <h1>Editar Categoria</h1>
        <form action="{{ route('categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $category->name) }}" required>
            </div>

            <div class="form-group mt-3">
                <label for="description">Descrição</label>
                <textarea id="description" name="description" class="form-control" required>{{ old('description', $category->description) }}</textarea>
            </div>

            <button type="submit" class="btn btn-warning mt-3">Atualizar</button>
        </form>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary mt-3">Voltar</a>
    </div>
