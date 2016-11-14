<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PojednostavljenjePostupka extends Model
{

    public $timestamps = false;
    
    protected $table = 'pojednostavljenjepostupka';
    protected $primaryKey = "pojednostavljenjeID";

    protected $fillable = [
        'rokPredmeta',
        'zastarelostObrazlozenje',
        'izmenaPostupak',
        'potrebaUkidanje',
        'clanoviIzmena',
        'preklapanjeNadleznosti',
        'organiPreklapanje',
        'digitalizacijaPostupka',
        'preduslovE-Postupak',                                
    ];

    public function formular()
    {
        return $this->belongsTo('App\Formular', 'sifraPostupka', 'sifraPostupka');
    }

    public function predloziIzmenePostupaka()
    {
        return $this->hasMany('App\PredlogIzmenePostupka','pojednostavljenjeID','pojednostavljenjeID');
    }
}
