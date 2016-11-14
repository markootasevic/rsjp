<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SvrhaPostupkaStavke extends Model
{
	
	public $timestamps = false;

    protected $table = 'svrhapostupkastavke';
    protected $primaryKey = "rbr";

    protected $fillable = [
        'organizacijaPreklapanje',
        'aktivnostPreklapanje',
    ];

    public function svrhaPostupka()
    {
        return $this->belongsTo('App\SvrhaPostupka', 'svrhaID', 'svrhaID');
    }
}
