<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SvrhaPoststupkaStavke extends Model
{

    protected $table = 'svrhapostupkastavke';
    protected $primaryKey = "rbr";

    public function svrhaPostupka()
    {
        return $this->belongsTo('SvrhaPostupka', 'svrhaID', 'svrhaID');
    }
}
