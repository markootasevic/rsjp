<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LiceKojePopunjavaFormular extends Model
{
    public $timestamps = false;
    protected $table = 'licekojepopunjavaFormular';
    protected $primaryKey = "liceID";
    protected $fillable = [
    	'imePrezime',
    	'radnoMesto',
    	'telefon',
    	'elektronskaPosta',
    ];

    public function opstiPodaci()
    {
        return $this->hasMany('App\OpstiPodaci','liceID','liceID');
    }
}
