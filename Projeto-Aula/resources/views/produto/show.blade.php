<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container py-3">
        <h1>Dados do Produto</h1>
        <div class="row">
            <div class="mb-3">
                <p><strong>Nome: </strong>{{ $produto->nome }}</p>
            </div>
            <div class="mb-3">
                <p><strong>Preço: </strong>{{ $produto->preco }}</p>
            </div>
            <div class="mb-3">
                <p><strong>Estoque: </strong>{{ $produto->estoque }}</p>
            </div>
            <div class="mb-3">
                <p><strong>Descrição: </strong>{{ $produto->descricao }}</p>
            </div>
            <div class="mb-3">
                <p><strong>Categoria: </strong>{{ $produto->categoria->nome }}</p>
            </div>
            <div class="alert alert-danger">
                <p class="text-danger">Deseja excluir?</p>
                <a href="/produto" class="btn btn-secondary">Voltar</a>
                <form method="post" action="/produto/{{ $produto->id }}">
                    @CSRF
                    @method('delete')
                    <button class="btn btn-danger" type="submit">
                        Excluir
                    </button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

</html>