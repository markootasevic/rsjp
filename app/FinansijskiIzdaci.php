<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FinansijskiIzdaci extends Model
{

	public $timestamps = false;

    protected $table = 'finansijskiizdaci';
    protected $primaryKey = "finansijskiIzdaciID";

    protected $fillable = [
    	'vrstaIzdatka',
    	'punNazivIzdatka',
    	'nazivPropisa',
    	'propisNijeObjavljen',	
    	'd_fajl',
    	'clanPropisIzdatak',
    	'tarifniBroj',
    	'iznos',
    	'svrhaPlacanja',
    	'primalac',
    	'brojRacuna',
    	'pozivNaBroj',
    	'komentarIzdatak',
    ];

    public function formular()
    {
        return $this->belongsTo('App\Formular', 'sifraPostupka', 'sifraPostupka');
    }
}
