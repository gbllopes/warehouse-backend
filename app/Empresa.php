<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = [
        'id_empresa',
        'no_razao_social',
        'sigla_empresa',
        'nr_cnpj_empresa',
        'telefone_empresa',
        'email_empresa',
        'data_fundacao_empresa'
    ];


    public function responsavel(){
        return $this->hasMany('App\Responsavel', 'id_empresa','id_empresa');
    }

    protected $table = 'empresa';
    protected $primaryKey = 'id_empresa';
    public $timestamps = false;
}
