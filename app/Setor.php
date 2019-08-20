<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setor extends Model
{
    protected $fillable = [
        'ds_setor'
    ];


    protected $table = 'setor';
    protected $primaryKey = 'id_setor';
}
