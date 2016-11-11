<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UkupanBrojZahteva extends Model
{
    protected $table = 'ukupanbrojzahteva';
    protected $primaryKey = "ukupanBrojZahtevaID";

    public function opstiPodaci()
    {
        return $this->hasMany('OpstiPodaci','ukupanBrojZahtevaID','ukupanBrojZahtevaID');
    }
}
