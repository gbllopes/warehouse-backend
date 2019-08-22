<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $fillable =[
        'id_cargo',
        'ds_cargo'
    ];


    public function responsavel(){
        return $this->belongsTo(Responsavel::class, 'id_cargo');
    }

    protected $table = 'cargo';
    protected $primaryKey = 'id_cargo';
    public $timestamps = false;
}
