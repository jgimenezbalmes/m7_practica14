<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    protected $table = 'pokemon';
    protected $fillable = [
        'nom',
        'tipus_elemental',
        'nivell_evolucio',
        'genere',
        'habitat',
        'observacions'
    ];
    protected $hidden = [];
    protected static function newFactory()
    {
        return \Database\Factories\PokemonFactory::new();
    }
}
