<!-- index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Catalogo de Produtos</title>
    <meta charset="utf-8">
    <!-- Adicione este link em seu <head> para importar o Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Catalogo de Produtos</h1>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="table-responsive d-none d-sm-block">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>Quantidade em Estoque</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>
                                <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">Detalhes</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <ul class="list-group d-sm-none">
            @foreach($products as $product)
                <li class="list-group-item mb-3">
                    <h4>{{ $product->name }}</h4>
                    <p>{{ $product->description }}</p>
                    <p><strong>Preço:</strong> {{ $product->price }}</p>
                    <p><strong>Quantidade em Estoque:</strong> {{ $product->quantity }}</p>
                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">Detalhes</a>
                </li>
            @endforeach
        </ul>
        <div class="d-flex">
                {!! $products->links() !!}
            </div>
        <a href="{{ route('products.create') }}" class="btn btn-primary mt-3">Cadastrar Novo Produto</a>
    </div>
</body>
</html>
