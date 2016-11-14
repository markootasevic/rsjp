<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PredlogIzmenePostupka extends Model
{
	public $timestamps = false;
    
    protected $table = 'predlogzaizmenupostupka';
    protected $primaryKey = "predlogID";

    protected $fillable = [
        'izmenaPostupak',
        'smanjenjeBroja',
        'smanjenjeUcestalosti',
        'eliminacijaDok',
        'eliminacijaInfo',
        'skracenjeRoka',
        'smanjenjeTroskova',
        'eliminacijaDupli',
        'pojednostavljenjeObrasca',
        'uvodjenjeOnline',
        'propisivanjeObrasca',
        'produzenjePodnosiocu',
        'pripremaUputstva',
        'drugo',                                
    ];

    public function pojednostavljenjePostupka()
    {
        return $this->belongsTo('App\PojednostavljenjePostupka', 'pojednostavljenjeID', 'pojednostavljenjeID');
    }
}
