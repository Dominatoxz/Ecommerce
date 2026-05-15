<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movimento extends Model
{
    protected $fillable = [
        'nome', 'marca', 'estoque'
    ];

    public function Movimentos(){
        return $this->hasMany(Movimento::class);
    }
}
