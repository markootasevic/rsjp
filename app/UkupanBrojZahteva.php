<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UkupanBrojZahteva extends Model
{
	public $timestamps = false;
    protected $table = 'ukupanbrojzahteva';
    protected $primaryKey = "ukupanBrojZahtevaID";
    protected $fillable = [
    	'podneti2014',
    	'podneti2015',
    	'pozitivni2014',
    	'pozitivni2015',
    	'negativni2014',
    	'negativni2015',
    	'изворУнетихПодатака',
    ];

    public function opstiPodaci()
    {
        return $this->hasMany('App\OpstiPodaci','ukupanBrojZahtevaID','ukupanBrojZahtevaID');
    }
}
