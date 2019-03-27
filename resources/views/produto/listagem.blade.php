
@extends('layout.principal')
@section('conteudo')
    <h1>Listagem de Produtos</h1>

    <table class="table table-striped table-bordered table-hover">
        <tr>

            <td>Nome</td>
            <td>Valor</td>
            <td>Descrição</td>
            <td>Quantidade</td>
            <td>View</td>
            <td>Excluir</td>

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
                    <td>
                        <a href="/produtos/mostra/{{$p->id}}"><i class="fas fa-binoculars"></i></a>
                        </td>
                    <td>
                        <a href="{{action('ProdutoController@remove',$p->id)}}"><i class="fas fa-trash"></i></a>
                    </td>

                </tr>

            @endforeach



        @endif

        <h4>

            <div class="alert alert-danger" role="alert">Um ou menos itens no estoque</div>

        </h4>

        <br>
        @if(old('nome'))
            <div class="alert alert-success">
                <strong>Sucesso!</strong> o produto {{old('nome')}} foi adicionado com sucesso

            </div>
        @endif

    </table>
@stop