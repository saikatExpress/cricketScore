<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    use HasFactory;

    protected $fillable = [
        'match_type',
        'tournament_type',
        'first_team',
        'second_team',
        'category',
        'venue',
        'stadium_image',
    ];
}