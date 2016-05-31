<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hatta extends Model
{
    protected $table = 'hatta';

    protected $fillable = [
    'land_number_id',
    'property_no',
    'plan_type',
    'style',
    'land_area',
    'property_area',
    'no_of_bedroom',
    'no_of_bathroom',
    'total_built_area'
    ];
}
