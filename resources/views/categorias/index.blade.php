<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categorias</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
<main>
    <a href="{{route('categorias-conta.form')}}">
        <button>Adicionar Categoria</button>
    </a>
    <table>
        <thead>
        <tr>
            <th>Nome</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categorias as $categoria)
            <tr>
                <td>{{$categoria->nome}}</td>
                <td>
                    <a href="{{route('categorias-conta.form', $categoria->getKey())}}">Editar</a> |
                    <a href="{{route('categorias-conta.destroy', $categoria->getKey())}}">Excluir</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</main>
</body>
</html>
