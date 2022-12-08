<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'about_title',
        'about_description',
        'skilles_title',
        'skilles_description',
        'brithday',
        'website',
        'phone',
        'city',
        'age',
        'degree',
        'email',
        'freelance',
        'big_description',
        'facts',
        'facts_description',
        'happy_clients',
        'projecs',
        'hours_of_support',
        'team',
        'skills',
        'skills_description',
        'name',
        'name_description',
    ];

}
