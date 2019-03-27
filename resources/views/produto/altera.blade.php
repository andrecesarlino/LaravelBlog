@extends('layout.principal')
@section('conteudo')

    <h1>Novo Produto</h1>

    <form action="/produtos/altera" method="POST">

        <div class="form-group">
            <label for="">Nome:</label>
            <input name="nome" class="form-control" type="text" value="{{$p->nome}}">
        </div>
        <div class="form-group">
            <label for="">Descrição:</label>
            <input name="descricao" class="form-control" type="text" value="{{$p->valor}}">
        </div>

        <div class="form-group">
            <label for="">Valor:</label>
            <input name="valor" class="form-control" type="text" value="{{$p->descricao}}">
        </div>

        <div class="form-group">
            <label for="">Quantidade:</label>
            <input name="quantidade" class="form-control" type="text" value="{{$p->quantidade}}">
        </div>
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">

        <button class="btn btn-primary btn-block" type="submit">Editar</button>


    </form>

@stop