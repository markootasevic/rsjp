<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OstaliElementiPostupka extends Model
{
    //
    protected $table = 'ostalielementipostupka';
    protected $primaryKey = "ostaliElementiID";

    public function formular()
    {
        return $this->belongsTo('Formular', 'sifraPostupka', 'sifraPostupka');
    }

    public function obrasciZaPodnosenjeZahteva()
    {
        return $this->hasMany('ObrazacZaPodnosenjeZahteva','ostaliElementiID','ostaliElementiID');
    }
}
