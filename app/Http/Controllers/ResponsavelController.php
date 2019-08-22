<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Responsavel;
use Illuminate\Support\Facades\Auth;

class ResponsavelController extends Controller
{
    
    public function getResponsavelLogado(){
        return (Object)Responsavel::where('id_usuario', Auth::user()->id_usuario)->with('empresa')->with('cargo')->get();
    }
}
