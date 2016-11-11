<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IzdataAkta extends Model
{
    protected $table = 'izdataakta';
    protected $primaryKey = "aktaID";

    public function obrazacZaPodosenjeZahteva()
    {
        return $this->belongsTo('ObrazacZaPodnosenjeZahteva', 'obrazacID', 'obrazacID');
    }
}
