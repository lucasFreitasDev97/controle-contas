@extends('layouts.main')
@section('content')
    <div>
        <h1>Categorias</h1>
    </div>
    <div>
        <strong><a href="{{route('categorias-conta.form')}}">(+) Criar Categoria</a></strong>
    </div>
    <br>
    <table border="1">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categoriasConta as $categoria)
            <tr>
                <td>{{$categoria->nome}}</td>
                <td>
                    <a href="{{route('categorias-conta.form', ['categoriaConta' => $categoria->getKey()])}}">Editar</a> |
                    <a href="{{route('categorias-conta.destroy', ['categoriaConta' => $categoria->getKey()])}}">Excluir</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

