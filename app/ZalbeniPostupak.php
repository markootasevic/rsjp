<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ZalbeniPostupak extends Model
{
    protected $table = 'zalbenipostupak';
    protected $primaryKey = "zalbeniPostupakID";

    public function formular()
    {
        return $this->belongsTo('Formular', 'sifraPostupka', 'sifraPostupka');
    }

    public function troskoviZalbenogPostupka()
    {
        return $this->hasMany('TroskoviZalbenogPostupka','zalbeniPostupakID','zalbeniPostupakID');
    }
}
