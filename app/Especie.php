<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especie extends Model
{
    public function pets()
    {
        return $this->hasMany(Pet::class);
    }
}
