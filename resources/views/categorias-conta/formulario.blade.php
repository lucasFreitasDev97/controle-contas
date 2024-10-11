@extends('layouts.main')
@section('content')
    <div>
        @if($categoriaConta)
            <h2>Editar Categoria</h2>
        @else
            <h2>Criar Categoria</h2>
        @endif
    </div>
    <form method="POST" @if($categoriaConta) action="{{route('categorias-conta.update', $categoriaConta->getKey())}}" @else action="{{route('categorias-conta.store')}}" @endif>
        @csrf
        <div>
            <label>Nome</label>
            <input type="text" name="nome" id="nome" @if($categoriaConta) value="{{$categoriaConta->nome}}" @endif>
        </div>
        <br>
        <div class="">
            <button type="submit">Salvar</button>
        </div>
    </form>
@endsection
