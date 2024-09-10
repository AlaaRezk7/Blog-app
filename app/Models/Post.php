<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
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
        'thumbnail',   // Add your new columns here
        'title',
        'color',
        'slug',
        'category_id',
        'content',
        'tags',
        'published',
    ];

    // If you have any casts or attributes, make sure to update them as necessary
    
    protected $casts = [
        'tags' => 'array',  // Casts the `tags` attribute to an array
    ];
    public function categoryyy(){
        return $this->belongsTo(Categoryyy::class, 'category_id');
    }
}
