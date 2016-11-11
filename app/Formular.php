<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formular extends Model
{
    protected $table = 'formular';
    protected $primaryKey = "sifraPostupka";

    public function potrebneDokumentacije()
    {
        return $this->hasMany('PotrebnaDokumentacija','sifraPostupka','sifraPostupka');
    }

    public function finansijskiIzdaci()
    {
        return $this->hasMany('FinansijskiIzdaci','sifraPostupka','sifraPostupka');
    }

    public function propisi()
    {
        return $this->hasMany('Propisi','sifraPostupka','sifraPostupka');
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
