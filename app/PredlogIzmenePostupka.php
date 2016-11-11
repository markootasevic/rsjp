<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PredlogIzmenePostupka extends Model
{
    protected $table = 'predlogzaizmenupostupka';
    protected $primaryKey = "predlogID";

    public function pojednostavljenjePostupka()
    {
        return $this->belongsTo('PojednostavljenjePostupka', 'pojednostavljenjeID', 'pojednostavljenjeID');
    }
}
