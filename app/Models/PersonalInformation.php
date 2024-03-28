<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalInformation extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'city',
        'address',
        'country',
        'date_of_birth',
        'date_of_marriage',
        'married',
        'country_of_marriage',
        'widowed',
        'previously_married'
    ];

    protected $casts = [
        'date_of_birth' => 'datetime',
        'date_of_marriage' => 'datetime',
    ];
}
