<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use Mockery\Exception;

class ProdutoController extends Controller
{
    public function store(Request $request){
        if($request){
            $carrinhoProdutos = $request->all();
            $produto = array();
            foreach($carrinhoProdutos as $unidade){
                $produto = [
                    'no_produto' => $unidade['no_produto'],
                    'codigo_produto' =>$unidade['codigo_produto'],
                    'fabricante' =>$unidade['fabricante'],
                    'qtde_produto' =>$unidade['qtde_produto'],
                    'id_empresa' =>$unidade['empresa']['id_empresa'],
                    'id_setor' =>$unidade['setor']['id_setor']
                ];
                 Produto::create($produto);  
            }
            return response()->json(['status' => 200]);
        }
    }

    public function showByIdEmpresa($idEmpresa){
        return Produto::where('id_empresa', $idEmpresa)->with('setor')->get();
    }
}
