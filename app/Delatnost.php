<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delatnost extends Model
{
    public $timestamps = false;
    protected $table = 'delatnost';
    protected $primaryKey = "delatnostRbr";
     protected $fillable = [
        'delatnost',
     ];

    public function opstiPodaci()
    {
        return $this->belongsTo('OpstiPodaci', 'opstiPodaciID', 'opstiPodaciID');
    }

    public function poddelatnosti()
    {
        return $this->hasMany('Poddelatnost','delatnostRbr','delatnostRbr');
    }

}
