<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// Tambahkan ini agar error hilang:
use App\Models\Category;
use App\Models\Publisher;
use App\Models\Rating;

class Book extends Model
{
    // Supaya bisa diisi data lewat form, tambahkan baris ini:
    protected $fillable = ['judul', 'kategori_id', 'publisher_id'];

    public function category() { return $this->belongsTo(Category::class); }
    public function publisher() { return $this->belongsTo(Publisher::class); }
    public function ratings() { return $this->hasMany(Rating::class); }
}