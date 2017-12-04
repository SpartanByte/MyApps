<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movie extends Model
{
    // use Soft Deletes
    // use SoftDeletes;

    protected $table = 'movies';

    protected $fillable = [
        'title',
        'year',
        'genre',
        'media_type',
    ];
}
