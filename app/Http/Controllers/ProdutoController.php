<?php

namespace App\Http\Controllers;
use App\Http\Requests\ProdutosRequest;
use App\Produto;
use Request;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    public function lista() {

        //$produtos = DB::select('select * from produtos');
        $produtos = Produto::all();


        /* METODOS DE LISTAR */
        //return view('listagem')->with('produtos', $produtos);

        //return view('listagem')->withProdutos($produtos);

        if(view()->exists('produto.listagem')) {
            return view('produto.listagem')->withProdutos($produtos);
        } else {
            return "View não encontrada!";
        }
    }

    public function mostra($id) {

        //pega a requição da view se não tiver nada pega o 0
        //$id = Request::input('id', '0');
        // $input = Request::all();
        // $input = Request::only('nome', 'id');

        // pega a rota criada
        //$id = Request::route('id');


        //$resposta = DB::select('select * from produtos where id = ?', [$id]);
        $produto = Produto::find($id);

        if(view()->exists('produto.detalhes')) {
            if(empty($produto)) {
                return "Esse produto não existe";
            } else {
                return view('produto.detalhes')->with('p',$produto);
            }
        } else {
            return "View não encontrada!";
        }
    }

    public function novo() {
        return view('produto.formulario');
    }

    public function adiciona(ProdutosRequest $request) {



        Produto::create($request->all());

        //$params = Request::all();
        //$produto = new Produto($params);
        //$produto->save();

        return redirect()
            ->action('ProdutoController@lista')
            ->withInput(Request::only('nome'));

        //$nome = Request::input('nome');
        //$descricao = Request::input('descricao');
        //$valor = Request::input('valor');
        //$quantidade = Request::input('quantidade');
        //DB::insert("insert into produtos (nome, valor, descricao, quantidade) values (?,?,?,?)", array($nome, $valor, $descricao, $quantidade));
        // return redirect('/produtos')->withInput();

    }


    public function listaJson() {

        $produtos = DB::select('select * from produtos');
        return response()->json($produtos);
    }


    public function remove($id) {

        $produto = Produto::find($id);
        $produto->delete();

        return redirect()->action('ProdutoController@lista');
    }


}
