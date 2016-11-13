<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ZalbeniPostupak extends Model
{
    public $timestamps = false;
    protected $table = 'zalbenipostupak';
    protected $primaryKey = "zalbeniPostupakID";
    protected $fillable = [
        'protivAkt',
        'nazivPropisa',
        'zalbaPropisOpis',
        'e_fajl',
        'zalbaPropisClan',
        'zalbaOrganDostava',
        'zalbaRok',
        'zalbaPodnosenje',
        'zalbaOrganOdluka',
        'rokZaOdlucivanjeZalbe',
    ];

    public function formular()
    {
        return $this->belongsTo('App\Formular', 'sifraPostupka', 'sifraPostupka');
    }

    public function troskoviZalbenogPostupka()
    {
        return $this->hasMany('App\TroskoviZalbenogPostupka','zalbeniPostupakID','zalbeniPostupakID');
    }
}
