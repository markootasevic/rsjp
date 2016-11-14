<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IzdataAkta extends Model
{

    public $timestamps = false;

    protected $fillable = [
        'nacinDostave',
        'postojiRegistar',
        'aktDostupan',
        'linkJavniRegistar', 
    ];

    protected $table = 'izdataakta';
    protected $primaryKey = "aktaID";

    public function obrazacZaPodosenjeZahteva()
    {
        return $this->belongsTo('App\ObrazacZaPodnosenjeZahteva', 'obrazacID', 'obrazacID');
    }
}
