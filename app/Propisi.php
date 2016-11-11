<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propisi extends Model
{
    protected $table = 'propisi';
    protected $primaryKey = "rbr";

    public function formular()
    {
        return $this->belongsTo('Formular', 'sifraPostupka', 'sifraPostupka');
    }
}
