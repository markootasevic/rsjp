<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FinansijskiIzdaci extends Model
{

    protected $table = 'finansijskiizdaci';
    protected $primaryKey = "finansijskiIzdaciID";

    public function formular()
    {
        return $this->belongsTo('Formular', 'sifraPostupka', 'sifraPostupka');
    }
}
