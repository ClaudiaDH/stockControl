<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //Caso o nome da tabela nao esteja no plural daria para mudar aqui
    //public @tableName = "products"
    //public $primaryKey = id;
    //public $timestamps = false;
    public function users(){
        return $this->belongsTo('App\User');
    }
}


