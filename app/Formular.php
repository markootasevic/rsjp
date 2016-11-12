<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Propisi;

class Formular extends Model
{
    public $timestamps = false;

    protected $table = 'formular';
    protected $primaryKey = "sifraPostupka";

    protected $fillable = [
        'napomene',
        'datumPopunjavanjaPostupka',
        'nazivPostupka',
    
    ];

    public function potrebneDokumentacije()
    {
        return $this->hasMany('App\PotrebnaDokumentacija','sifraPostupka','sifraPostupka');
    }

    public function finansijskiIzdaci()
    {
        return $this->hasMany('App\FinansijskiIzdaci','sifraPostupka','sifraPostupka');
    }

    public function propisi()
    {
        return $this->hasMany('App\Propisi','sifraPostupka','sifraPostupka');
    }

    public function svrhePostupka()
    {
        return $this->hasMany('SvrhaPostupka','sifraPostupka','sifraPostupka');
    }

    public function zalbeniPostupci()
    {
        return $this->hasMany('ZalbeniPostupak','sifraPostupka','sifraPostupka');
    }

    public function ostaliElementiPostupka()
    {
        return $this->hasMany('OstaliElementiPostupka','sifraPostupka','sifraPostupka');
    }

    public function pojednostavljenjePostupaka()
    {
        return $this->hasMany('PojednostavljenjePostupka','sifraPostupka','sifraPostupka');
    }

    public function opstiPodaci()
    {
        return $this->hasMany('OpstiPodaci','sifraPostupka','sifraPostupka');
    }


}
