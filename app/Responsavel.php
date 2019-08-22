<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsavel extends Model
{
    protected $fillable = [
        'id_responsavel',
        'id_empresa',
        'id_cargo',
        'id_usuario',
        'no_responsavel',
        'data_nascimento_responsavel'
    ];


    public function empresa(){
        return $this->hasOne(Empresa::class, 'id_empresa', 'id_empresa');
    }

    public function cargo(){
        return $this->hasOne(Cargo::class, 'id_cargo', 'id_cargo');
    }

    public function usuario(){
        return $this->hasOne(User::class,'id_usuario');
    }

    protected $table = 'responsavel';
    protected $primaryKey = 'id_responsavel';
    public $timestamps = false;

}
