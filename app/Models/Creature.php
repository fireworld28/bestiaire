<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['nom', 'type', 'points_de_vie', 'attaque', 'description'])]
class Creature extends Model
{
    use HasFactory;

    protected $table = 'creature';

    public const TYPES = [
        'Feu',
        'Eau',
        'Terre',
        'Air',
        'Foudre',
        'Ombre',
    ];
}