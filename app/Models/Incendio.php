<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incendio extends Model
{
    protected $table = 'incendio';
    use HasFactory;

    protected $fillable = [
        'local',
        'area_devastada',
        'duracao',

    ];
}
