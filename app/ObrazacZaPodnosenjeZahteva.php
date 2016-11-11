<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ObrazacZaPodnosenjeZahteva extends Model
{
    //
    protected $table = 'obrazaczapodnosenjezahteva';
    protected $primaryKey = "obrazacID";

    public function ostaliElementiPostupka()
    {
        return $this->belongsTo('OstaliElementiPostupka', 'ostaliElementiID', 'ostaliElementiID');
    }

    public function izdatiAkti()
    {
        return $this->hasMany('IzdataAkta','obrazacID','obrazacID');
    }
}
