<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poddelatnost extends Model
{
    public $timestamps = false;
    protected $table = 'poddelatnost';
    protected $primaryKey = "poddelatnostRbr";
    protected $fillable = [
    	
    ];

    public function delatnost()
    {
        return $this->belongsTo('Delatnost', 'delatnostRbr', 'delatnostRbr');
    }
}
