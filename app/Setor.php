<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setor extends Model
{
    protected $fillable = [
        'id_setor',
        'ds_setor'
    ];


    public $timestamps = false;
    protected $table = 'setor';
    protected $primaryKey = 'id_setor';
}
