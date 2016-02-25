<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Qouz extends Model
{
    protected $table = 'qouz';

    protected $fillable = [
    'apartment_code',
    'building_no',
    'apartment_no',
    'no_of_bedrooms',
    'floor_no',
    'no_of_bathrooms',
    'area',
    'balcony'
    ];

}
