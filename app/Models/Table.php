<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tableone';

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