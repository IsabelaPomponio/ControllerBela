
    <div class="container">
        <h1>Editar Produto</h1>
        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $product->name) }}" required>
            </div>

            <div class="form-group mt-3">
                <label for="description">Descrição</label>
                <textarea id="description" name="description" class="form-control" required>{{ old('description', $product->description) }}</textarea>
            </div>

            <div class="form-group mt-3">
                <label for="price">Preço</label>
                <input type="number" id="price" name="price" class="form-control" value="{{ old('price', $product->price) }}" required>
            </div>

            <div class="form-group mt-3">
                <label for="id_category">Categoria</label>
                <select id="id_category" name="id_category" class="form-control" required>
                    <option value="">Selecione uma Categoria</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $product->id_category == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-warning mt-3">Atualizar</button>
        </form>
        <a href="{{ route('products.index') }}" class="btn btn-secondary mt-3">Voltar</a>
    </div>
