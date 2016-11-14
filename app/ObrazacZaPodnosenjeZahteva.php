<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ObrazacZaPodnosenjeZahteva extends Model
{
    //
    public $timestamps = false;

    protected $table = 'obrazaczapodnosenjezahteva';
    protected $primaryKey = "obrazacID";

    protected $fillable = [
        'zahtevPodnosenje',
        'tipObrasca',
        'nazivPropisa',
        'obrazacPropisOpis',
        'dj_fajl3',
        'obrazacPropisClan',
        'obrazacPreuzimanje',
        'linkObrazac',
        'dj_fajl4',
        'obrazacDostava',    
    ];

    public function ostaliElementiPostupka()
    {
        return $this->belongsTo('App\OstaliElementiPostupka', 'ostaliElementiID', 'ostaliElementiID');
    }

    public function izdatiAkti()
    {
        return $this->hasMany('App\IzdataAkta','obrazacID','obrazacID');
    }
}
