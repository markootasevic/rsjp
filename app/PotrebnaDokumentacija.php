<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PotrebnaDokumentacija extends Model
{
	public $timestamps = false;
    protected $table = 'potrebnadokumentacija';
    protected $primaryKey = "potrebnaDokumentacijaRbr";
    protected $fillable = [
    	'nazivDokument',
    	'usloviDokument',
    	'izdavalacDokument',
    	'podaciDokument',
    	'formaDokument',
    	'pribavljanjeDokumentacije',
    	'pribavljanjePoslDuz',
    ];

    public function formular()
    {
        return $this->belongsTo('App\Formular', 'sifraPostupka', 'sifraPostupka');
    }
}
