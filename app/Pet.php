<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    public function especie()
    {
        return $this->belongsTo(Especie::class);
    }
}
