<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PojednostavljenjePostupka extends Model
{
    protected $table = 'pojednostavljenjepostupka';
    protected $primaryKey = "pojednostavljenjeID";

    public function formular()
    {
        return $this->belongsTo('Formular', 'sifraPostupka', 'sifraPostupka');
    }

    public function preloziIzmenePostupaka()
    {
        return $this->hasMany('PredlogIzmenePostupka','pojednostavljenjeID','pojednostavljenjeID');
    }
}
