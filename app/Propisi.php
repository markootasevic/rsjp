<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Propisi;

class Propisi extends Model
{
	public $timestamps = false;

    protected $table = 'propisi';
    protected $primaryKey = "rbr";

    protected $fillable = [
    	'vrstaPropisa',
    	'nazivPropisa',
    	'nazivPropisaOpt',
    	'b_fajl',	
    	'clanoviPropisa',
    ];

    public function formular()
    {
        return $this->belongsTo('App\Formular', 'sifraPostupka', 'sifraPostupka');
    }
}
