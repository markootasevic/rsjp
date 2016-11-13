<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OpstiPodaci extends Model
{
    public $timestamps = false;    
    protected $table = 'opstipodaci';
    protected $primaryKey = "opstiPodaciID";
    protected $fillable = [
        'nadlezniOrgan',
        'nadlezniOrgan2',
        'organizacionaJedinica',
        'subjekti',
        'vrstaOvlascenja',
        'nivoVlasti',
        'viseNivoa',
        'sprovodjenjePostupka',
        'vrstaPostupka',
        'ucestalostPostupka',
        'intenzitetPodnosenja',
        'nazivIzdatogAkta',
    ];

    public function formular()
    {
        return $this->belongsTo('App\Formular', 'sifraPostupka', 'sifraPostupka');
    }

    public function ukupanBrojZahteva()
    {
        return $this->belongsTo('App\UkupanBrojZahteva', 'ukupanBrojZahtevaID', 'ukupanBrojZahtevaID');
    }

    public function liceKojePopunjavaFormular()
    {
        return $this->belongsTo('App\LiceKojePopunjavaFormular', 'liceID', 'liceID');
    }

    public function delatnosti()
    {
        return $this->hasMany('App\Delatnost','opstiPodaciID','opstiPodaciID');
    }


}
