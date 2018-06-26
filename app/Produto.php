<?php

namespace sistema;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';
    public $timestamps = false;

    protected $fillable = array('nome',
        'valor', 'descricao', 'quantidade');
}
