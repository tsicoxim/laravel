<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 10/06/2018
 * Time: 14:01
 */

namespace sistema\Http\Controllers;

use Request;
use sistema\Produto;
use sistema\Http\Requests\ProdutoRequest;
use Illuminate\Support\Facades\Validator;


class ProdutoController extends Controller
{
    public function lista(){

        $produtos = Produto::all();

        return view('produtos.listagem')->with('produtos', $produtos);
    }

    public function mostra($id){

        $produto = Produto::find($id);
        if(empty($produto)) {
            return "Esse produto não existe";
        }

        return view('produtos.detalhes')->with('p', $produto);
    }

    public function novo(){
        return view('produtos.formulario');
    }

    public function adiciona(ProdutoRequest $request){

        Produto::create($request->all());

        return redirect()->action('ProdutoController@lista')
            ->withInput(Request::only('nome'));
    }

    public function listaJson(){

        $produtos = Produto::all();

        return response()->json($produtos);
    }

    public function remove($id){
        $produto = Produto::find($id);
        $produto->delete();

        return redirect()
            ->action('ProdutoController@lista');
    }

    public function atualizar(ProdutoRequest $request, $id){
        $produtos = $request->all();
        $id = Produto::findOrFail($id);
        $id->update ($produtos);

        return redirect('/produtos')->withInput();
    }

    public function editar($id)
    {
        $produtos = Produto::find($id);

        return view('produtos.editar')->with('p', $produtos);
    }

}