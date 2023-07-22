<!-- show.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Detalhes do Produto</title>
    <meta charset="utf-8">
    <!-- Adicione este link em seu <head> para importar o Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Detalhes do Produto</h1>
        <table class="table">
            <tr>
                <th>Nome</th>
                <td>{{ $product->name }}</td>
            </tr>
            <tr>
                <th>Descrição</th>
                <td>{{ $product->description }}</td>
            </tr>
            <tr>
                <th>Preço</th>
                <td>{{ $product->price }}</td>
            </tr>
            <tr>
                <th>Quantidade em Estoque</th>
                <td>{{ $product->quantity }}</td>
            </tr>
        </table>

        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Editar</a>

        <form method="POST" action="{{ route('products.destroy', $product->id) }}" style="display: inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Deletar</button>
        </form>
    </div>
</body>
</html>
