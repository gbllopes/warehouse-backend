<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'no_produto','fabricante','qtde_produto','codigo_produto','id_setor','id_empresa'
    ];

    
    public function empresa(){
        return $this->belongsTo(Empresa::class, 'id_empresa', 'id_empresa');
    }
    
    public function setor(){
        return $this->belongsTo(Setor::class, 'id_setor');
    }

    
    protected $table = 'produto';
    protected $primaryKey = 'id_produto';
    public $timestamps = false;

    
    
}
