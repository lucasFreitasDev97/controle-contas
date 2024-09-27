<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contas</title>
</head>
<body>
    <main>
        <form method="POST" action="" enctype="multipart/form-data">
            <div>
                <label for="categoria">Categoria</label>
                <select name="categoria" id="categoria">
                    @foreach($categorias as $categoria)
                        <option value="{{$categoria->getKey()}}">{{$categoria->name}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="mes">Mês</label>
                <select name="mes" id="mes">
                    <option value="1" {{ $mesSelecionado == 1 ? 'selected' : '' }}>Janeiro</option>
                    <option value="2" {{ $mesSelecionado == 2 ? 'selected' : '' }}>Fevereiro</option>
                    <option value="3" {{ $mesSelecionado == 3 ? 'selected' : '' }}>Março</option>
                    <option value="4" {{ $mesSelecionado == 4 ? 'selected' : '' }}>Abril</option>
                    <option value="5" {{ $mesSelecionado == 5 ? 'selected' : '' }}>Maio</option>
                    <option value="6" {{ $mesSelecionado == 6 ? 'selected' : '' }}>Junho</option>
                    <option value="7" {{ $mesSelecionado == 7 ? 'selected' : '' }}>Julho</option>
                    <option value="8" {{ $mesSelecionado == 8 ? 'selected' : '' }}>Agosto</option>
                    <option value="9" {{ $mesSelecionado == 9 ? 'selected' : '' }}>Setembro</option>
                    <option value="10" {{ $mesSelecionado == 10 ? 'selected' : '' }}>Outubro</option>
                    <option value="11" {{ $mesSelecionado == 11 ? 'selected' : '' }}>Novembro</option>
                    <option value="12" {{ $mesSelecionado == 12 ? 'selected' : '' }}>Dezembro</option>
                </select>
            </div>
            <div>
                <label for="ano">Ano: </label>
                <input type="number" name="ano" id="ano" @if($conta) value="{{$conta->ano}}"@endif>
            </div>
            <div>
                <label for="valor">Valor: </label>
                <input type="text" name="valor" id="valor" @if($conta) value="{{$conta->ano}}@endif">
            </div>
            <div>
                <label for="status">Status</label>
                <select name="status" id="status">
                    <option value="{{\App\Models\Conta::PENDENTE}}">Pendente</option>
                    <option value="{{\App\Models\Conta::PAGO}}">Pago</option>
                </select>
            </div>
            <div>
                <label>Comprovante: </label>
                <input name="comprovante" id="comprovante">
            </div>
            <div>
                <button type="submit">Salvar</button>
            </div>
        </form>
    </main>
</body>
</html>
