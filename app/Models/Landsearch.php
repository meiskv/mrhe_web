<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Landsearch extends Model
{
    protected $table = 'landsearch';

    protected $fillable = [
    'land_use',
    'plan',
    'beneficiary',
    'owners_name',
    'longitude',
    'latitude',
    'areasqft',
    'areasqm',
    'areaname',
    'land_number_id'
    ];
}
