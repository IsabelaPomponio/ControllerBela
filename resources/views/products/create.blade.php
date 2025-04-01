
    <div class="container">
        <h1>Adicionar Novo Produto</h1>
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" required>
            </div>

            <div class="form-group mt-3">
                <label for="description">Descrição</label>
                <textarea id="description" name="description" class="form-control" required>{{ old('description') }}</textarea>
            </div>

            <div class="form-group mt-3">
                <label for="price">Preço</label>
                <input type="number" id="price" name="price" class="form-control" value="{{ old('price') }}" required>
            </div>

            <div class="form-group mt-3">
                <label for="id_category">Categoria</label>
                <select id="id_category" name="id_category" class="form-control" required>
                    <option value="">Selecione uma Categoria</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ old('id_category') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-success mt-3">Salvar</button>
        </form>
        <a href="{{ route('products.index') }}" class="btn btn-secondary mt-3">Voltar</a>
    </div>
