<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vereadores extends Model
{
    protected $fillable = [
    'nome',
    'votos',
    'situacao',
    'inicio',
    'fim',
    'partido',
    'bens',
    'foto'
    ];
}
