@extends('layout.principal')
@section('conteudo')

    <h1>Novo Produto</h1>

    @if (count($errors) >0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
               <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif


    <form action="/produtos/adiciona" method="POST">

        <div class="form-group">
            <label for="">Nome:</label>
            <input name="nome" class="form-control" value="{{old('nome')}}" type="text">
        </div>
        <div class="form-group">
            <label for="">Descrição:</label>
            <input name="descricao" class="form-control" value="{{old('descricao')}}" type="text">
        </div>

        <div class="form-group">
            <label for="">Valor:</label>
            <input name="valor" class="form-control" value="{{old('valor')}}" type="text">
        </div>

        <div class="form-group">
            <label for="">Quantidade:</label>
            <input name="quantidade" class="form-control" value="{{old('quantidade')}}" type="text">
        </div>
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">

        <button class="btn btn-primary btn-block" type="submit">Cadastrar</button>

    </form>

@stop