<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OpstiPodaci extends Model
{
    //
    protected $table = 'opstipodaci';
    protected $primaryKey = "opstiPodaciID";

    public function formular()
    {
        return $this->belongsTo('Formular', 'sifraPostupka', 'sifraPostupka');
    }

    public function ukupanBrojZahteva()
    {
        return $this->belongsTo('UkupanBrojZahteva', 'ukupanBrojZahtevaID', 'ukupanBrojZahtevaID');
    }

    public function liceKojePopunjavaFormular()
    {
        return $this->belongsTo('LiceKojePopunjavaFormular', 'liceID', 'liceID');
    }

    public function delatnosti()
    {
        return $this->hasMany('Delatnost','opstiPodaciID','opstiPodaciID');
    }


}
