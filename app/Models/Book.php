<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Publisher;
use App\Models\Rating;

class Book extends Model
{
    protected $fillable = [
        'judul', 
        'penulis', 
        'isbn', 
        'category_id', 
        'publisher_id'
    ];

    public function category() { return $this->belongsTo(Category::class); }
    public function publisher() { return $this->belongsTo(Publisher::class); }
    public function ratings() { return $this->hasMany(Rating::class); }
}
