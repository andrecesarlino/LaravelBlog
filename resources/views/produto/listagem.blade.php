
@extends('layout.principal')
@section('conteudo')
    <h1>Listagem de Produtos</h1>

    <table class="table table-striped table-bordered table-hover">
        <tr>

            <td>Nome</td>
            <td>Valor</td>
            <td>Descrição</td>
            <td>Quantidade</td>
            <td>Ações</td>

        </tr>

        @if(empty($produtos))

            <div class="alert alert-danger"> Você não tem nenhum produto cadastrado.</div>

        @else

            @foreach ($produtos as $p)

                <tr class="{{$p->quantidade <= 1 ? 'bg-danger text-light' : ''}}">


                    <td>{{$p->nome}}</td>
                    <td>{{$p->valor}}</td>
                    <td>{{$p->descricao}}</td>
                    <td>{{$p->quantidade}}</td>
                    <td><a href="/produtos/mostra/{{$p->id}}"><i class="fas fa-binoculars"></i></a></td>

                </tr>

            @endforeach



        @endif

        <h3>

            <div class="alert alert-danger" role="alert">Um ou menos itens no estoque</div>

        </h3>

    </table>
@stop