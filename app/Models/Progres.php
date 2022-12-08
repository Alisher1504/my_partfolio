<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progres extends Model
{
    use HasFactory;

    protected $fillable = [
        'prog_name',
        'prog_foiz',
        'prog',
    ];

}
