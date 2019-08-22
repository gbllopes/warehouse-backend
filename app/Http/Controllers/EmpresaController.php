<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use App\Responsavel;
use Illuminate\Support\Facades\Auth;

class EmpresaController extends Controller
{
    
    public function show(Request $request){
        return $request->empresa();
    }

    public function store(Request $request){
        $empresa = Empresa::create($request->all());
        Responsavel::where('id_usuario', Auth::user()->id_usuario)->update(['id_empresa' => $empresa->id_empresa]);
    }
}
