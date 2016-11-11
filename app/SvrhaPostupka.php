<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SvrhaPostupka extends Model
{

    protected $table = 'svrhapostupka';
    protected $primaryKey = "svrhaID";

    public function formular()
    {
        return $this->belongsTo('Formular', 'sifraPostupka', 'sifraPostupka');
    }

    public function svrhaPostupkaStavke()
    {
        return $this->hasMany('SvrhaPoststupkaStavke','svrhaID','svrhaID');
    }
}
