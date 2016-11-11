<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PotrebnaDokumentacija extends Model
{
    protected $table = 'potrebnadokumentacija';
    protected $primaryKey = "potrebnaDokumentacijaRbr";

    public function formular()
    {
        return $this->belongsTo('Formular', 'sifraPostupka', 'sifraPostupka');
    }
}
