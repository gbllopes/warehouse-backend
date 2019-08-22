<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permissao extends Model
{
    protected $fillable = [
        'id_permissao','ds_permissao'
    ];


    protected $hidden = [
        'id_permissao', 'pivot'
    ];
    public function usuario(){
        return $this->belongsToMany('App\User','usuario_permissao', 'id_permissao','id_usuario');
    }

    public $timestamps = false;
    protected $table = 'permissao';
    public $primaryKey = 'id_permissao';
}
