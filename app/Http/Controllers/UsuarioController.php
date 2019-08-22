<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsuarioController extends Controller
{

    public function getAuthorities(Request $request){
        $permissoes = array();
        $data = User::find($request->user()->id_usuario)->permissao;
        foreach($data as $permissao){
           array_push($permissoes, $permissao->ds_permissao);      
        }
        return response()->json(['authorities' => $permissoes]);
    }
}
