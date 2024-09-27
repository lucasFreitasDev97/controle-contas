<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categorias</title>
</head>
<body>
    <main>
        <form method="POST" action="#">
            @csrf
            <div class="">
                <label>Nome</label>
                <input type="text" name="nome" id="nome" @if($categoria) value="{{$categoria->nome}}" @endif>
            </div>
            <div class="">
                <button type="submit">Salvar</button>
            </div>
        </form>
    </main>
</body>
</html>
