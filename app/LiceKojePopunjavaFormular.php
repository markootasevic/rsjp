<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LiceKojePopunjavaFormular extends Model
{
    //
    protected $table = 'licekojepopunjavaFormular';
    protected $primaryKey = "liceID";

    public function opstiPodaci()
    {
        return $this->hasMany('OpstiPodaci','liceID','liceID');
    }
}
