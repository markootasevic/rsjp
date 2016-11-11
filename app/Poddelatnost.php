<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poddelatnost extends Model
{
    //
    protected $table = 'poddelatnost';
    protected $primaryKey = "poddelatnostRbr";

    public function delatnost()
    {
        return $this->belongsTo('Delatnost', 'delatnostRbr', 'delatnostRbr');
    }
}
