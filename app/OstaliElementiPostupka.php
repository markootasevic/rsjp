<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OstaliElementiPostupka extends Model
{
    //
    public $timestamps = false;

    protected $table = 'ostalielementipostupka';
    protected $primaryKey = "ostaliElementiID";

    protected $fillable = [
        'rokPredmeta',
        'rokPredmeta1',
        'rokZaResavanje',
        'nazivPropisaRok',
        'rokPropisOpis',
        'dj_fajl1',
        'propisRok',
        'rokNeuredni',
        'rokUredni_Avg',
        'vremeVazenja',
        'nazivPropisaVremeVazenja',
        'nijeObjavljenVremeVazenja', //vazenjePropisOpis
        'dj_fajl2',
        'vremeVazenjaIzdatog',
    ];

    public function formular()
    {
        return $this->belongsTo('App\Formular', 'sifraPostupka', 'sifraPostupka');
    }

    public function obrasciZaPodnosenjeZahteva()
    {
        return $this->hasMany('App\ObrazacZaPodnosenjeZahteva','ostaliElementiID','ostaliElementiID');
    }
}
