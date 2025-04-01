
    <div class="container">
        <h1>Detalhes da Bebela</h1>
        <p><strong>ID:</strong> {{ $bebela->id }}</p>
        <p><strong>Nome:</strong> {{ $bebela->name }}</p>
        <p><strong>Descrição:</strong> {{ $bebela->description }}</p>

        <a href="{{ route('bebelas.index') }}" class="btn btn-secondary mt-3">Voltar</a>
        <a href="{{ route('bebelas.edit', $bebela->id) }}" class="btn btn-warning mt-3">Editar</a>
    </div>
