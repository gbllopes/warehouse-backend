<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setor;

class SetorController extends Controller
{
    

    public function listall(){
        return Setor::all();
    }
}
