<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poddelatnost extends Model
{
    public $timestamps = false;
    protected $table = 'poddelatnost';
    protected $primaryKey = "poddelatnostRbr";
    protected $fillable = [
    	'poddelatnost',
    ];

    public function delatnost()
    {
        return $this->belongsTo('App\Delatnost', 'delatnostRbr', 'delatnostRbr');
    }

    public function opstiPodaci() {
      return $this->belongsTo('App\OpstiPodaci', 'opstiPodaciID', 'opstiPodaciID');
    }
}
