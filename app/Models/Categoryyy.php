<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoryyy extends Model
{
    use HasFactory;
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'body',
        'name',   // Add your new columns here
        'slug',
    ];

    // If you have any casts or attributes, make sure to update them as necessary
    // protected $casts = [
    //     'new_column_two' => 'integer',
    // ];
}
