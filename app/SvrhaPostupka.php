<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SvrhaPostupka extends Model
{

    public $timestamps = false;


    protected $table = 'svrhapostupka';
    protected $primaryKey = "svrhaID";

    protected $fillable = [
        'svrhaIOpis',
        'organKomunikacija',
    ];


    public function formular()
    {
        return $this->belongsTo('App\Formular', 'sifraPostupka', 'sifraPostupka');
    }

    public function svrhaPostupkaStavke()
    {
        return $this->hasMany('App\SvrhaPoststupkaStavke','svrhaID','svrhaID');
    }
}
