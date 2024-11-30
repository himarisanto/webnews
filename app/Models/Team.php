<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        // 'birth_date',
        'position',
        'squad_number',
        'previous_club',
        'jumlah_gol',
        'image',
    ];
}
