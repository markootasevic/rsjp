<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TroskoviZalbenogPostupka extends Model
{
    protected $table = 'troskovizalbenogpostupka';
    protected $primaryKey = "troskoviZalbenogID";

    public function zalbeniPostupak()
    {
        return $this->belongsTo('ZalbeniPostupak', 'zalbeniPostupakID', 'zalbeniPostupakID');
    }
}
