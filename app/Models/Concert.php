<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Concert extends Model
{
    // use Soft Deletes
    // use SoftDeletes;

    protected $table = 'concerts';

    protected $fillable = [
        'band_name',
        'concert_date',
        'venue',
        'city_state',
    ];


}
