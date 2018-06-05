<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    public function imoveis()
    {
    	return $this->hasMany('App\Imovel','tipo_id');
    }
}
