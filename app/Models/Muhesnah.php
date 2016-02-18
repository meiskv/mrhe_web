<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Muhesnah extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'muhesnah';

    protected $fillable = [
    'apartment_code',
    'building_no',
    'apartment_no',
    'no_of_bedrooms',
    'floor_no',
    'area',
    'balcony'
    ];

}