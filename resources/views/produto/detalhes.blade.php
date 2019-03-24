
@extends('layout.principal')
@section('conteudo')
    <h1>Controle de Estoque</h1>

    <ul>
        <li>
            <b>Nome: </b> {{$p->nome or 'Nenhum nome informado'}} ?>
        </li>
        <li>
            <b>Valor: </b> R$ {{$p->valor or 'Nenhum valor informado'}}
        </li>
        <li>
            <b>Descrição: </b> {{$p->descricao or 'Nenhuma descrição informada'}}
        </li>
        <li>
            <b>Quantidade: </b> {{$p->quantidade or 'Nenhuma quantidade informada'}}
        </li>
    </ul>
@stop