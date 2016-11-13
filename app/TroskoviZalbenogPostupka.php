<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TroskoviZalbenogPostupka extends Model
{
	public $timestamps = false;
    protected $table = 'troskovizalbenogpostupka';
    protected $primaryKey = "troskoviZalbenogID";
    protected $fillable = [
    	'zalbaNazivTrosak',
    	'nazivPropisa',
    	'zalbaTrosakPropisOpis',
    	'e_fajl2',
    	'zalbaTrosakPropisClan',
    	'zalbaTarifniBroj',
    	'zalbaIznos',
    	'zalbaSvrhaPlacanja',
    	'zalbaPrimalac',
    	'zalbaBrojRacuna',
    	'zalbaPozivNaBroj',
    ];

    public function zalbeniPostupak()
    {
        return $this->belongsTo('App\ZalbeniPostupak', 'zalbeniPostupakID', 'zalbeniPostupakID');
    }
}
