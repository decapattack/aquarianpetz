<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{

    protected $fillable = [
        'user_id', 'telefone', 'visivel', 'ativo'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
