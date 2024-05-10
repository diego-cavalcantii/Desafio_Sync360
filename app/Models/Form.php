<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $table = 'forms';

    protected $fillable = [
        'nome',
        'idade',
        'rua',
        'numero',
        'comple',
        'bairro',
        'estado',
        'biografia'
    ];
}

